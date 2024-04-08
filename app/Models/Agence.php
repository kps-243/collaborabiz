<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Agence extends Model
{
    use HasFactory;
    use HasRoles;

    protected $table = 'agence'; // Spécifiez le nom de la table si différent de la convention Laravel.
    protected $fillable = ['nom', 'prenom', 'telephone', 'email', 'password', 'nom_agence', "lien_agence", 'siret_agence'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    
}