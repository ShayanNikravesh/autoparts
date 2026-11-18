<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use RealRashid\SweetAlert\Facades\Alert;

class StoreMessageRequest extends FormRequest
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
        Alert::error('عملیات ناموفق');
        
        return [
            'first_name' => ['required','string'],
            'last_name' => ['required','string'],
            'mobile'=>['required','regex:/^(\+98|98|0)9\d{9}$/','string'],
            'message'=>['required','string'],
        ];
    }
}
