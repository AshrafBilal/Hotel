<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoomFormRequest extends FormRequest
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
            'property_id' => [
                'required',
                'integer'
            ],
            'name' => [
                'required',
                'string'
            ],
            'gest' => [
                'required',
                'integer'
            ],
            'child' => [
                'required',
                'integer'
            ],
            'bed' => [
                'required',
                'integer'
            ],
            'bathroom' => [
                'required',
                'integer'
            ],
            'price' => [
                'required',
            ],
            'image' => [
                'nullable',
                //'image|mimes:jpg,jpeg,png',
            ],
        ];
    }
}
