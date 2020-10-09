<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Factory;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class RegisterFormRequest extends FormRequest
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
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:6|max:10',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'chưa nhập name',
            'name.string' => 'tên chưa đúng định dạng',
            'email.required' => 'chưa nhập email',
            'email.email' => 'email chưa đúng định dạng',
            'email.unique:users' => 'email đã tồn tại',
            'password.required' => 'chưa nhập password',
            'password.string' => 'mật khẩu chưa đúng định dạng',
            'password.min' => 'mật khẩu phải có ít nhất 6 ký tự',
            'password.max' => 'mật khẩu phải ít hơn 10 ký tự',
        ];
    }

    protected function failedValidation(Validator $validator) {
        $response = [
            'status' => false,
            'message' => $validator->errors()->first(),
            'data' => $validator->errors()
        ];
        throw new HttpResponseException(response()->json($response, 200));
    }
}
