<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ];
    }
    public function messages(): array
    {
        return [
            'name.required' => 'Lütfen adınızı giriniz.',
            'lastname.required' => 'Lütfen soyadınızı giriniz.',
            'email.required' => 'Lütfen e-posta adresinizi giriniz.',
            'email.email' => 'Lütfen geçerli bir e-posta adresi giriniz.',
            'email.unique' => 'Bu e-posta adresi zaten sistemde kayıtlı.',
            'password.required' => 'Lütfen bir şifre belirleyiniz.',
            'password.min' => 'Şifreniz en az 8 karakterden oluşmalıdır.',
            'password.confirmed' => 'Girdiğiniz şifreler birbiriyle uyuşmuyor.',
        ];
    }
}
