<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
// use Illuminate\Contracts\Validation\Validator;
// use RealRashid\SweetAlert\Facades\Alert;

class StoreTitleRequest extends FormRequest
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
            'title' => ['required'],
            'english_title' => ['required'],
        ];
    }

    // protected function failedValidation(Validator $validator)
    // {
    //     Alert::error('عملیات ناموفق');

    //     parent::failedValidation($validator);
    // }
}
