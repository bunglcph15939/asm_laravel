<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
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
            'email' => ['required', 'string', 'email', 'max:255',
            Rule::unique('users')->ignore($this->user),
              ],
            'username'=>'required|min:6|max:50',
            'password'=>'required|min:6|max:50',
            'address'=>'required|min:6|max:50',
            'phone' => 'required|min:10|numeric',
        ];
    }
}

