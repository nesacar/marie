<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateMenuLinkRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'link' => 'required',
            'order' => 'required|numeric',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Naziv je obavezan',
            'link.required' => 'Link je obavezan',
            'order.required' => 'Redosled je obavezan',
            'order.numeric' => 'Redosled je obavezan',
        ];
    }
}
