<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserEditRequest extends FormRequest
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
            'nomUser' => 'required|max:50',
            'prenomUser' => 'required|max:50',
            'email' => 'required|email|',
            'telUser'=>'required|numeric|regex:/[0-9]{8}/',
            'adresseUser' => 'required'
        ];
    }
}
