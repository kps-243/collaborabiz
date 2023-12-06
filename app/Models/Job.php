<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class job extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        'titre',
        'description',
        'delais',
        'duree_collabz',
        'liens',
        'contraintes',
    ];

    protected $casts = [
        'delais' => 'datetime', // Pour s'assurer que delais_postuler est un objet DateTime
    ];
}
