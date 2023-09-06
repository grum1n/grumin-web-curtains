<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGalleryRequest extends FormRequest
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
            'title' => 'required|string|min:2|max:50',
            'description' => 'required|string|min:2|max:200',
            'cover' => 'required|image|mimes:jpeg,png,jpg|max:10000',
            'status' => 'required',
            'user' => 'required|string|max:50',
            'page_id' => 'required|string|max:9',
        ];
    }
}
