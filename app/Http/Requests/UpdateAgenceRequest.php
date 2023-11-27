<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAgenceRequest extends FormRequest
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
            'email' => 'required|email|unique:agence,email',
            'password' => 'required|string|max:100',
            'nom_agence' => 'required|string|max:100',
            'lien_agence' => 'required|string|max:100',
            'siret_agence' => 'required|string|max:100',
        ];
    }
}