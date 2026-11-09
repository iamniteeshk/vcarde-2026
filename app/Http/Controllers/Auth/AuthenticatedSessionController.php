<?php

namespace App\Http\Controllers\Auth;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use App\Mail\PlanExpirationReminder;
use Illuminate\Support\Facades\Auth;
use App\Models\Setting;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\Factory;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Validation\ValidationException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\Facades\Cookie;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return Application|Factory|View|\Illuminate\View\View
     */
    public function create(): \Illuminate\View\View
    {
        $registerImage = Setting::where('key', 'register_image')->value('value');
        $authTheme = Setting::where('key', 'auth_page_theme')->value('value') ?? 1;

        $themeViews = [
            1 => 'auth.login',
            2 => 'auth.login2',
        ];

        $loginView = $themeViews[$authTheme] ?? $themeViews[1];

        return view($loginView, ['registerImage' => $registerImage]);

    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        if (! isset($request->remember)) {
            Cookie::queue(Cookie::forget('email'));
            Cookie::queue(Cookie::forget('password'));
            Cookie::queue(Cookie::forget('remember'));
        } else {
            Cookie::queue('email', $request->email, 3600);
            Cookie::queue('password', $request->password, 3600);
            Cookie::queue('remember', 1, 3600);
        }
        $user = User::whereEmail($request->email)->first();

        if (! empty($user)) {
            if ($user['email_verified_at'] != null) {
                if ($user['is_active'] == User::IS_ACTIVE) {
                    if (isOrganisationStaffSubscriptionExpired($user)) {
                        throw ValidationException::withMessages([
                            'email' => __('messages.subscription.organization_subscription_expired'),
                        ]);
                    }

                    $request->authenticate();

                    $request->session()->regenerate();

                    if ($user->hasRole('admin') && $request->redirect == "delete") {
                        return redirect()->route('delete-account');
                    }
                    if ($user->enable_two_factor_authentication == 1) {
                        session(['2fa:user:id' => $user->id]);
                        auth()->logout();
                        return redirect()->route('2fa.verify');
                    }
                    return redirect()->to($this->urlAfterLogin($request, $user));
                } else {
                    throw ValidationException::withMessages([
                        'email' => __('auth.account_deactivate'),
                    ]);
                }
            } else {
                throw ValidationException::withMessages([
                    'email' => __('auth.email_verify'),
                ]);
            }
        } else {
            throw ValidationException::withMessages([
                'email' => __('auth.failed'),
            ]);
        }
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

    /**
     * Open the dashboard for this role. A saved "intended" URL is used only
     * when that role is allowed to open it, so a super admin is not sent to
     * the admin dashboard (and the other way around).
     */
    private function urlAfterLogin(Request $request, User $user): string
    {
        $fallback = getDashboardURL();
        $intended = $request->session()->pull('url.intended');

        if (! is_string($intended) || $intended === '') {
            return $fallback;
        }

        $path = parse_url($intended, PHP_URL_PATH) ?: '/';
        $isSuperAdmin = $user->hasRole(Role::ROLE_SUPER_ADMIN);
        $isAdmin = $user->hasRole(Role::ROLE_ADMIN);

        if ((str_starts_with($path, '/sadmin')) && ! $isSuperAdmin) {
            return $fallback;
        }

        if ((str_starts_with($path, '/admin')) && ! $isAdmin) {
            return $fallback;
        }

        return $intended;
    }
}
