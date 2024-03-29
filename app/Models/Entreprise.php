<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Policies\EntreprisePolicy;
use Spatie\Permission\Traits\HasRoles;

class Entreprise extends Model
{
    use HasFactory;
    use HasRoles;

    protected $fillable = [
        'name',
        'date_creation',
        'email',
        'password',
        'phone',
        'siret',
        'link',
    ];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
    protected $policy = EntreprisePolicy::class;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function jobs()
    {
        return $this->hasMany(Job::class);
    }

}