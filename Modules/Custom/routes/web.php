<?php

use Illuminate\Support\Facades\Route;
use Modules\Custom\App\Http\Controllers\CustomController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Grok SPA is the public site at `/`. The previous Blade marketing site is
| kept as a backup under `/home`.
|
*/

$spaPages = 'about|faq|templates|press|nfc-cards|nfc-business-cards|nfc-business-card-guide|contact|pvc-nfc-business-card|metal-nfc-business-card|nfc-google-reviews|nfc-vs-qr|qr-code-generator|nfc-card-near';

Route::get('/', [CustomController::class, 'showGrokHome'])->name('home');
Route::get('nfc-card-near/{area}', [CustomController::class, 'showGrokHome'])
    ->where('area', '[a-z0-9-]+')
    ->name('grok.near-area');
Route::get('{spaPage}', [CustomController::class, 'showGrokHome'])
    ->where('spaPage', $spaPages)
    ->name('grok.page');

Route::prefix('home')->group(function () {
    Route::get('/', [CustomController::class, 'index'])->name('legacy.home');
    Route::get('contact', [CustomController::class, 'showContact'])->name('contact');
    Route::get('faq', [CustomController::class, 'showFaq'])->name('custom.faq');
    Route::get('how-to-create-vcard', [CustomController::class, 'showVCard'])->name('custom.vcard');
    Route::get('nfc-card', [CustomController::class, 'showNfcCard'])->name('custom.nfc-card');
    Route::get('plan', [CustomController::class, 'showPlan'])->name('custom.plan');
    Route::get('privacy-policy', [CustomController::class, 'showPrivacyPolicy'])->name('custom.privacy-policy');
    Route::get('refund-policy', [CustomController::class, 'showRefundPolicy'])->name('custom.refund-policy');
    Route::get('shipping-policy', [CustomController::class, 'showShippingPolicy'])->name('custom.shipping-policy');
    Route::get('templates', [CustomController::class, 'showTemplates'])->name('custom.templates');
    Route::get('terms-condition', [CustomController::class, 'showTermsCondition'])->name('custom.terms-condition');
    Route::get('data-deletion-policy', [CustomController::class, 'showDataDeletionPolicy'])->name('custom.data-deletion-policy');
    Route::get('activate-your-vcarde-nfc-card', [CustomController::class, 'showActivateYourVcardeNfcCard'])->name('custom.activate-your-vcarde-nfc-card');
    Route::get('the-role-of-nfc-in-google-reviews-enhancing-business-growth-in-2025', [CustomController::class, 'showTheRoleOfNfcInGoogleReviewsEnhancingBusinessGrowthIn2025'])->name('custom.the-role-of-nfc-in-google-reviews-enhancing-business-growth-in-2025');
});

Route::post('contact-support', [CustomController::class, 'submitSupport'])->name('custom.submitSupport');

Route::get('test-hello', function () {
    return 'Hello from Custom Module';
});
