<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserControllerRequest extends FormRequest
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
            'name'=>'required|min:6|max:50',
            'email'=>'required|email',
            'username'=>'required|min:6|max:50',
            'password'=>'required|min:6|max:50',
            'address'=>'required|min:6|max:50',
            'phone' => 'required|min:10|numeric',
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'Tên người dùng bắt buộc nhập ',
            'name.min'=>'Độ dài tên người dùng',
            'name.max'=>'Độ dài tên người dùng tối đa 50 kí tự',
            'email.required'=>'Email ngườ dùng bắt buộc nhập',
            'email.email'=>'Email nười dùng phải đúng định dạng ',
            'code.required'=>'Không được để trống code',
            'code.min'=>'Code Tối thiểu 6 kí tự ',
            'code.max'=>'Code Tối đa 50 kí tự',
            'username.required'=>'username Không được để trống',
            'username.min'=>'Username Tối thiểu 6 kí tự',
            'username.max'=>'Username tối đa 50 kí tự',
            'password.required'=>'Password không được để trống',
            'password.min'=>'Pass tối thiểu 6 kí tự',
            'password.max'=>'Pass tối đa 50 kí tự',

            'address.required'=>'address không được để trống',
            'address.min'=>'Pass tối thiểu 6 kí tự',
            'address.max'=>'Pass tối đa 50 kí tự',

            'Phone.required'=>'Phone không được để trống',
            'address.numeric'=>'Phải là số',



        ];
    }
}
