<?php

namespace App\Http\Requests;

use App\Models\Currency;
use Illuminate\Foundation\Http\FormRequest;

class UpdateCurrencyRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $rules = Currency::$rules;
        $rules['currency_name'] = $rules['currency_name'] . ',' . $this->route('currency')->id;
        $rules['currency_code'][4] = 'unique:currencies,currency_code,' . $this->route('currency')->id;
        return $rules;
    }

    protected function prepareForValidation()
    {
        if ($this->has('currency_code')) {
            $this->merge([
                'currency_code' => strtoupper($this->currency_code),
            ]);
        }
    }
}
