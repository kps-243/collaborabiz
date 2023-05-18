<?php

use App\Models\CreativeAlone;

// ...

// Créer un nouvel enregistrement
$creativeAlone = new CreativeAlone();
$creativeAlone->nom = 'John';
$creativeAlone->prenom = 'Doe';
$creativeAlone->num = '123456789';
$creativeAlone->email = 'john.doe@example.com';
$creativeAlone->password = 'secret';
$creativeAlone->date_naissance = '1990-01-01';
$creativeAlone->niveau = 'Débutant';
$creativeAlone->save();

// Récupérer tous les enregistrements
$creativeAlones = CreativeAlone::all();
foreach ($creativeAlones as $creativeAlone) {
    echo $creativeAlone->nom . ' ' . $creativeAlone->prenom . '<br>';
}

// Récupérer un enregistrement par ID
$creativeAlone = CreativeAlone::find(1);
echo $creativeAlone->nom . ' ' . $creativeAlone->prenom . '<br>';

// Mettre à jour un enregistrement
$creativeAlone->nom = 'Jane';
$creativeAlone->save();

// Supprimer un enregistrement
$creativeAlone->delete();
