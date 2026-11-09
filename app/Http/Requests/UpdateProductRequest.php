<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use RealRashid\SweetAlert\Facades\Alert;

class UpdateProductRequest extends FormRequest
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
            'title' => ['required', 'string', 'regex:/^[0-9\-\_ پچجحخهعغفقثصضشسیبلاتنمکگوئدذرزطظژآ]+$/i'],
            'english_title' => ['required','regex:/^[A-Za-z0-9\-\_\/]+$/i'],
            'price'=>['required','numeric'],
            'price_discounted'=>['numeric'],
            'description'=>['required'],
            'review'=>['required'],
            'stock'=>['required','numeric'],
        ];
    }
}
