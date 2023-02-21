<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePostRequest extends FormRequest
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
           'title' => 'required|max:255',
           'content' => 'required',
           'author' => 'required|alpha'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'The name is required',
            'title.max' => 'Maximum 255 characters please',
            'content.requried' => 'Content is required',
            'author.requried' => 'Author is required',
            'author.alpha' => 'Author has to be alphabetical'
        ];
    }
}
