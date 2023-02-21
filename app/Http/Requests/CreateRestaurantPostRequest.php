<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateRestaurantPostRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|max:255',
            'address' => 'required|regex:/^[a-zA-z0-9\s]+$/',
            'zipCode' => 'required|numeric',
            'town' => 'required|alpha',
            'country' => 'required|alpha',
            'review' => 'required|numeric',
            'description' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'The name is required',
            'name.max' => 'The title can\'t exceed 255 characters',
            'address.required' => 'Adress is required',
            'address.alpha_num' => 'Address must be alphanumeric',
            'zipCode.required' => 'zip code is required',
            'zipCode.numeric' => 'zip code must be a number',
            'town.required' => 'Town is required',
            'town.alpha' => 'Town must contain only letters',
            'country.required' => 'Country is required',
            'country.alpha' => 'Country must contain only letters',
            'review.required' => 'Review is required',
            'review.numeric' => 'Review must be a number'
        ];
    }
}
