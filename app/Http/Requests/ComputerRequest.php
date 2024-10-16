<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComputerRequest extends FormRequest
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
            'computer_name' => 'required|string|max:100',
            'computer_date' => 'required|date',
            'computer_max_capacity' => 'required|string|max:20',
            'computer_brand' => 'required|string|max:50',
            'computer_description' => 'required|string|max:255',
            'computer_color' => 'required|string|max:50',
            'computer_is_active' => 'required|boolean',
            'computer_price' => 'required|numeric|min: 200000|max: 10000000',
            'computer_size' => 'required|string|max:50',
        ];
    }
}
