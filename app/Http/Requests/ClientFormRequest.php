<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientFormRequest extends FormRequest
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
            'name' => 'required | min:3',
            'gender' => 'required',
            'phone' => 'required | numeric',
            'email' => 'required | email',
            'address' => 'required | min:3',
            'nationality' => 'required',
            'dob' => 'required',
            'edub' => 'required',
            'modeOfContact' => 'required',
        ];
    }
}