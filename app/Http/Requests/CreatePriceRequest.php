<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePriceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() : bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() : array
    {
        return [
            'product_id' => 'required',
            'model' => 'required|string',
            'unit_amount' => 'required',
            'currency' => 'required|string|max:3|min:3',
            'interval' => 'required|numeric',
            'billing_scheme' => 'required|string'
        ];
    }
}
