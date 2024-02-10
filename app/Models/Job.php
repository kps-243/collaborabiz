<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;



class job extends Model implements HasMedia
{
    use HasSlug;
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
        'slug',
    ];

    protected $casts = [
        'delais' => 'datetime', // Pour s'assurer que delais_postuler est un objet DateTime
    ];

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('titre')
            ->saveSlugsTo('slug')
            ->usingSeparator('-')
            ->allowDuplicateSlugs();
    }

    public function entreprise()
    {
        return $this->belongsTo(Entreprise::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}