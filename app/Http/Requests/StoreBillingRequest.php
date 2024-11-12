<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBillingRequest extends FormRequest
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
            'first_name' => ['nullable', 'max:250', 'string'],
            'phone' => ['nullable', 'string'],
            'technician_id' => ['required', 'exists:technicians,id'],
            'service_id' => ['required', 'exists:services,id'],
            'device_name' => ['string', 'required', 'max:250'],
            'amount' => ['required', 'numeric'],
            'purchase_price' => ['required', 'numeric'],
            'payment_method' => ['required', 'in:cash,bkash'],
            'comment' => ['nullable', 'string', 'max:250'],
        ];
    }
}
