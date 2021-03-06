<?php

namespace App\Http\Requests\backEnd\patien;

use Illuminate\Foundation\Http\FormRequest;

class Store extends FormRequest
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
            'image' => 'required|image',
            'firstName' => 'required',
            'middleName'=> 'required',
            'lastName'  => 'required',
            'BirthDate' => 'required',
            'gender'   => 'required',
            'email'     => 'required|email',
            'phoneNumber'   => 'required',
            // 'NationalNumber'    => 'required',
            // 'country'           => 'required',
            'password'          => 'required|confirmed',
            'password_confirmation'=>'sometimes|required_with:password',
            'state'             => 'required',
            'role'              => '',
        ];
    }
}
