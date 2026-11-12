<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreManagerRequest extends FormRequest
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
            'first_name' => ['required','string'],
            'last_name' => ['required','string'],
            'email'=>['required','string','email','max:255','unique:managers,email'],
            'mobile'=>['required','regex:/^(\+98|98|0)9\d{9}$/','string'],
            'password'=>['required','min:6','confirmed','string'],
            'level'=>['required','numeric'],
        ];
    }
}
