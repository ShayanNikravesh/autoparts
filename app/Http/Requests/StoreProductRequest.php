<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use RealRashid\SweetAlert\Facades\Alert;

class StoreProductRequest extends FormRequest
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
            'english_title' => ['required','regex:/^[A-Za-z0-9\-\_\/]+$/i','string'],
            'category'=>['required','numeric'],
            'brand'=>['required','numeric'],
            'price'=>['required','numeric','integer','min:0'],
            'price_discounted'=>['numeric','integer','min:0'],
            'status'=>['required','in:active,inactive,unavailable,stop_selling'],
            'description'=>['required','string'],
            'review'=>['required','string'],
            'stock'=>['required','numeric'],
        ];
        
    }
}
