<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'nom' => 'required',
            'phone' => 'nullable', // Utilisez votre règle de validation personnalisée ici
            'mail' => 'required|email',
            'work' => 'nullable',
            'link' => 'required',
            'question' => 'required|max:200'
        ];
    }
}
