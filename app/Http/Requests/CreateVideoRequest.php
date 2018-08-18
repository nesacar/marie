<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateVideoRequest extends FormRequest
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
            'blog_id' => 'required',
            'title' => 'required',
            'href' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'blog_id.required' => 'Kategorija je obavezna',
            'title.required' => 'Naslov je obavezan',
            'href.required' => 'Link videa je obavezan',
        ];
    }
}
