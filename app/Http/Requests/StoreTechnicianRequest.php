<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTechnicianRequest extends FormRequest
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
            'first_name' => ['required', 'string', 'max:250'],
            'last_name'=> ['nullable', 'string', 'max:250'],
            'national_id' => ['nullable','string', 'max:20', 'unique:technicians,national_id'],
            'phone' => ['required', 'string', 'max:15', 'regex:/^\d+$/'],
            'email' => ['nullable', 'string', 'max:250'],
            'profile_pic' => ['nullable','string'],
            'role_id' => ['required', 'exists:technician_roles,id'],
            'status' => ['in:active,inactive'],
        ];
    }
}
