<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Http\Request;


class CreativeAlone extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'prenom',
        'email',
        'password',
        'date_naissance',
        'phone',
    ];

    protected $dates = [
        'date_naissance',
    ];

    public function user()
    {
        return $this->morphOne(User::class, 'user');
    }

    // public static function createCreativeAlone(Request $request)
    // {
    //     return static::create($request->all(), [
    //         'name' => $request['name'],
    //         'phone' => $request['phone'],
    //         'email' => $request['email'],
    //         'password' => Hash::make($request['password']),
    //         'prenom' => $request['prenom'],
    //         'date_naissance' => $request['date_naissance'],
    //         'niveau' => $request['niveau'],
    //     ]);
    // }
}
