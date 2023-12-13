<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;


class job extends Model implements HasMedia
{
    use InteractsWithMedia;
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
