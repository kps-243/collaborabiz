<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class CreativeAlone extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'prenom',
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

    public static function createCreativeAlone(array $data)
    {
        return static::create([
            'name' => $data['name'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'prenom' => $data['prenom'],
            'date_naissance' => $data['date_naissance'],
            'niveau' => $data['niveau'],
        ]);
    }
}
