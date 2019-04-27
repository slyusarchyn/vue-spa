<?php

namespace App\Http\Requests\Api\Customer;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class CustomerStorePostRequest
 * @package App\Http\Requests\Api\Customer
 */
class CustomerStorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'    => 'required|min:3',
            'email'   => 'required|email',
            'phone'   => 'required|min:10|numeric',
            'website' => 'required|url',
        ];
    }
}
