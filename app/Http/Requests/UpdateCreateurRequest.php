<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCreateurRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Vous pouvez ajouter une logique d'autorisation ici si nécessaire.
    }

    public function rules()
    {
        return [
            'nom' => 'string|max:100',
            'prenom' => 'string|max:100',
            'telephone' => 'string|max:100',
            'email' => 'email|unique:createur,email,' . $this->route('createur'),
            'password' => 'string|max:100',
            'date_naissance' => 'date',
            'portfolio' => 'string|max:100',
        ];
    }
}