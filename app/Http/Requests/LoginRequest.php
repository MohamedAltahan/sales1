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
            'password'=>'required',
            'username'=>'required'

        ];
    }

    // you can omit this function and the you will the default message in english
    public function messages()
    {
        return[
           'username.required' =>'اسم المستخدم مطلوووب',
           'password.required'  =>'كلمة المرور مطلووبة'
        ];
    }

}
