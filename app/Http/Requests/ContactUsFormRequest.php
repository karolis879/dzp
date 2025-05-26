<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactUsFormRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'topic' => 'required|string',
            'email' => 'required|email',
            'name' => 'required|string|max:255',
            'company' => 'nullable|string|max:255',
            'country' => 'nullable|string|max:255',
            'message' => 'required|string',
        ];
    }
}
