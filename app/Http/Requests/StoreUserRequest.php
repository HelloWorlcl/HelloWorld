<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'name' => 'required|max:30',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6',
            'type' => 'required|in:customer,service',
            'phone' => 'required|digits:12|unique:users',
            'avatar' => 'image',
            'description' => 'max:1020'
        ];
    }
}
