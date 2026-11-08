<?php

namespace App\Http\Requests;

use App\Models\Currency;
use Illuminate\Foundation\Http\FormRequest;

class CreateCurrencyRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return Currency::$rules;
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
