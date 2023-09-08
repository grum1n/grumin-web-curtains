<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreServiceRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'section_desc' => 'required|string|min:2|max:100',
            'section_heading' => 'required|string|min:2|max:100',
            'body' => 'required|string|min:5|max:1000',
            'article_heading' => 'required|string|min:2|max:200',
            'article_body' => 'nullable|string|min:5|max:1000',
            'author' => 'required|string|min:2|max:50',
            'cover' => 'required|image|mimes:jpeg,png,jpg|max:10000',
            'user' => 'required|string|max:500',
        ];
    }
}
