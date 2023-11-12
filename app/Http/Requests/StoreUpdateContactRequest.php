<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class StoreUpdateContactRequest extends FormRequest
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
        $rules = [
            'name' => [
                'required',
                'min:5',
                'max:255'
            ],
            'contact' => [
                'required',
                'integer',
                'digits:9',
                'unique:contacts'
            ],
            'email' => [
                'required',
                'min: 5',
                'max: 255',
                'email',
                'unique:contacts'
            ],
        ];

        if($this->method() === 'PUT')
        {

            $rules['contact'] = [
                'required',
                'digits:9',
                'integer',
                Rule::unique('contacts')->ignore($this->id)
            ];

            $rules['email'] = [
                'required',
                'min: 3',
                'max: 255',
                'email',
                Rule::unique('contacts')->ignore($this->id)
            ];
        }

        return $rules;
    }
}
