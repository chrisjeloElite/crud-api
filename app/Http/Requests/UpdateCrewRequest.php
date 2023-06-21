<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateCrewRequest extends FormRequest
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
     * @return array<string, ValidationRule|array|string>
     */

        public function rules(): array
    {
        return [
            'first_name' => 'required|max:20',
            'last_name' => 'required|max:20',
            'middle_name' => 'required|max:20',
            'email'=> 'required|max:255',
            'address' => 'required|max:255',
            'contactDetails' => 'required|max:20',
            'education' => 'required|max:20'
        ];
    }

}
