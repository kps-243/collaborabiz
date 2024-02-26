<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;


class Createur extends Model
{
    use HasFactory;
    use HasRoles;

    protected $table = 'createur'; // Spécifiez le nom de la table si différent de la convention Laravel.
    protected $fillable = ['nom', 'prenom', 'telephone', 'email', 'password', 'date_naissance', 'portfolio'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'createur_roles', 'createur_id', 'role_id');
    }
    
}