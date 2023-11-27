<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Createur extends Model
{
    use HasFactory;

    protected $table = 'createur'; // Spécifiez le nom de la table si différent de la convention Laravel.
    protected $fillable = ['nom', 'prenom', 'telephone', 'email', 'password', 'date_naissance', 'portfolio'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    
}