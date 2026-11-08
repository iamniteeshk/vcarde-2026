<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use App\Models\Currency;
use App\Http\Requests\CreateCurrencyRequest;
use App\Http\Requests\UpdateCurrencyRequest;
use App\Models\Plan;
use App\Models\Product;
use App\Models\Setting;
use App\Models\UserSetting;
use App\Models\AppointmentTransaction;
use App\Models\ProductTransaction;
use App\Models\WhatsappStoreProduct;

class CurrencyController extends AppBaseController
{
    /**
     * @return Application|Factory|View
     */
    public function index(): \Illuminate\View\View
    {
        return view('sadmin.currencies.index');
    }

    public function store(CreateCurrencyRequest $request): JsonResponse
    {
        $currency = Currency::create($request->all());
        return $this->sendResponse($currency, __('messages.flash.currency_create'));
    }

    public function edit(Currency $currency): JsonResponse
    {
        if (in_array($currency->currency_code, ['USD', 'INR'])) {
            return $this->sendError(__('messages.flash.currency_edit_protected'));
        }

        if ($this->checkIfCurrencyIsUsed($currency)) {
            return $this->sendError(__('messages.flash.currency_used'));
        }

        return $this->sendResponse($currency, 'Currency successfully retrieved.');
    }

    public function update(UpdateCurrencyRequest $request, Currency $currency): JsonResponse
    {
        if (in_array($currency->currency_code, ['USD', 'INR'])) {
            return $this->sendError(__('messages.flash.currency_edit_protected'));
        }

        if ($this->checkIfCurrencyIsUsed($currency)) {
            return $this->sendError(__('messages.flash.currency_used'));
        }

        $currency->update($request->all());

        return $this->sendSuccess(__('messages.flash.currency_update'));
    }

    public function destroy(Currency $currency): JsonResponse
    {
        if (in_array($currency->currency_code, ['USD', 'INR'])) {
            return $this->sendError(__('messages.flash.currency_delete_protected'));
        }

        if ($this->checkIfCurrencyIsUsed($currency)) {
            return $this->sendError(
                __('messages.flash.currency_used'));
        }

        $currency->delete();

        return $this->sendSuccess('Currency deleted successfully.');
    }

    private function checkIfCurrencyIsUsed(Currency $currency): bool
    {
        return Plan::where('currency_id', $currency->id)->exists() ||
            Product::where('currency_id', $currency->id)->exists() ||
            Setting::where('key', 'default_currency')->whereIn('value', [$currency->id, $currency->currency_code])->exists() ||
            UserSetting::where('key', 'currency_id')->where('value', $currency->id)->exists() ||
            AppointmentTransaction::where('currency_id', $currency->id)->exists() ||
            ProductTransaction::where('currency_id', $currency->id)->exists() ||
            WhatsappStoreProduct::where('currency_id', $currency->id)->exists();
    }
}
