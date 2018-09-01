<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePositionRequest extends FormRequest
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
        switch($this->method()){
            case 'POST':
                {
                    return [
                        'position_id' => 'required|unique:positions',
                        'title' => 'required',
                        'numero' => 'required',
                        'class' => 'required',
                    ];
                }

            case 'PUT':
            case 'PATCH':
                {
                    return [
                        'position_id' => 'required|unique:positions,position_id,' . $this->segment(3),
                        'title' => 'required',
                        'numero' => 'required',
                        'class' => 'required',
                    ];
                }
        }
    }

    public function messages()
    {
        return [
            'position_id.required' => 'ID je obavezan',
            'position_id.unique' => 'ID već postoji',
            'title.required' => 'Naziv je obavezan',
            'numero.required' => 'Numero je obavezan',
            'class.required' => 'Klasa je obavezna',
        ];
    }
}
