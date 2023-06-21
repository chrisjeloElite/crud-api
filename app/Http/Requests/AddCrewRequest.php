<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class AddCrewRequest extends FormRequest
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
            'first_name' => 'required|max:20',
            'last_name' => 'required|max:20',
            'middle_name' => 'required|max:20',
            'email'=> 'required|email|unique:crews|max:255',
            'address' => 'required|max:20',
            'contactDetails' => 'required|max:20',
            'education' => 'required|max:20'
        ];
    }



}
