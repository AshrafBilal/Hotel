<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PropertyFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'city_id' => [
                'required',
                'integer'
            ],
            'name' => [
                'required',
                'string'
            ],
            'location' => [
                'required',
            ],
            'image' => [
                'nullable',
                //'image|mimes:jpg,jpeg,png',
            ],
        ];
    }
}
