<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateJobRequest extends FormRequest
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
            'type' => 'required|in:Service,Produit',
            'titre' => 'required|string',
            'image' => 'nullable|image',
            'description' => 'string',
            'delais' => 'required|date',
            'duree_collabz' => 'required|string',
            'liens' => 'url',
            'contraintes' => 'string',
        ];
    }
}
