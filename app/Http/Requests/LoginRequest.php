<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'email'=>'required|min:5|email',
            'password'=>'required|min:5'
        ];
    }
    // public function messages()
    // {
    //     return [
    //         'email.required'=>'Email người dùng bắt buộc nhập',
    //         'email.email'=>'Email nười dùng phải đúng định dạng ',
    //         'password.required'=>'Password người dùng phải nhập ',

    //     ];


    // }
}
