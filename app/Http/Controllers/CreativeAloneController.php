<?php

namespace App\Http\Controllers;

use App\Models\CreativeAlone;
use Illuminate\Http\Request;


class CreativeAloneController extends Controller{
    
    public function store(Request $request)
    {
    // Valider les données du formulaire
    $validatedData = $request->validate([
        'nom' => 'required',
        'prenom' => 'required',
        'email' => 'required|email',
        'password' => 'required',
        'date_naissance' => 'required|date',
        'niveau' => 'required|in:débutant,intermédiaire,expert',
    ]);

    // Créer une nouvelle instance du modèle CreativeAlone avec les données validées
    $creativeAlone = new CreativeAlone();
    $creativeAlone->nom = $request->nom;
    $creativeAlone->prenom = $request->prenom;
    $creativeAlone->email = $request->email;
    $creativeAlone->password = bcrypt($request->password);
    $creativeAlone->date_naissance = $request->date_naissance;
    $creativeAlone->niveau = $request->niveau;

    // Enregistrer le modèle dans la base de données
    $creativeAlone->save();

    // Rediriger l'utilisateur vers une autre page ou effectuer d'autres actions
    return redirect()->route('salut')->with('success', 'Inscription réussie !');
    }
}