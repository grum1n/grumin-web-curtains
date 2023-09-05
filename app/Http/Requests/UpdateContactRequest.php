<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateContactRequest extends FormRequest
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
            'site_name' => 'required|string|min:2|max:20',
            'site_logo_big_text' => 'required|string|min:2|max:20',
            'site_logo_small_text' => 'required|string|min:2|max:30',
            'address' => 'required|string|min:2|max:30',
            'google_maps_link' => 'nullable|string|max:550',
            'email' => 'required|string|min:2|max:255',
            'phone_number_1' => 'required|string|min:2|max:255',
            'phone_number_2' => 'nullable|string|max:55',
            'facebook_acc' => 'nullable|string|max:555',
            'instagram_acc' => 'nullable|string|max:555',
            'twitter_acc' => 'nullable|string|max:555',
            'linkedin_acc' => 'nullable|string|max:555',
        ];
    }
}
