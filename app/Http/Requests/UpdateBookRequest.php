<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateBookRequest extends FormRequest
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
            'title' => ['required', 'string', 'max:255'],
            'author' => ['required', 'string', 'max:255'],
            'description' => ['string', 'max:1000'],
            'status' => ['required', 'string', 'max:255'],
            'published_year' => ['required', Rule::date()->format('Y')],
            'cover' => ['nullable', 'image', 'max:10000'],
        ];
    }

    public function messages()
    {
        return [
            'published_year' => 'The year field must be a valid year'
        ];
    }
}
