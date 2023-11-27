<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCreateurRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Vous pouvez ajouter une logique d'autorisation ici si nécessaire.
    }

    public function rules()
    {
        return [
            'nom' => 'required|string|max:100',
            'prenom' => 'required|string|max:100',
            'telephone' => 'required|string|max:100',
            'email' => 'required|email|unique:createur,email',
            'password' => 'required|string|max:100',
            'date_naissance' => 'required|date',
            'portfolio' => 'string|max:100',
        ];
    }
}