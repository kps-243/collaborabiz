<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CreativeAlone extends Model
{
    protected $fillable = [
        'nom',
        'prenom',
        'num',
        'email',
        'password',
        'date_naissance',
        'niveau',
    ];

    protected $dates = [
        'date_naissance',
    ];

    public function getNiveauAttribute($value)
    {
        switch ($value) {
            case 'd':
                return 'Débutant';
            case 'i':
                return 'Intermédiaire';
            case 'e':
                return 'Expert';
            default:
                return $value;
        }
    }

    public function setNiveauAttribute($value)
    {
        switch (strtolower($value)) {
            case 'débutant':
                $this->attributes['niveau'] = 'd';
                break;
            case 'intermédiaire':
                $this->attributes['niveau'] = 'i';
                break;
            case 'expert':
                $this->attributes['niveau'] = 'e';
                break;
            default:
                $this->attributes['niveau'] = $value;
        }
    }
}
