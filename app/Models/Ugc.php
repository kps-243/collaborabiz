<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Ugc extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $translatable = [
        'title',
        'text',
    ];

}
