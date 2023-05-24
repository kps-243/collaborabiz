<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'prenom' => ['required', 'string'],
            'date_naissance' => ['required', 'date'],
            'niveau' => ['required', 'in:débutant,intermédiaire,expert'],
            'date_creation' => ['required', 'date'],
            'siret' => ['required', 'string'],
            'lien' => ['required', 'url'],
            'phone' => ['required', 'string'],
            'name_agent' => ['required', 'string'],
        ]);
    }

    protected function create(array $data)
    {
        $userType = $data['user_type'];

        if ($userType === 'creative_alone') {
            return CreativeAlone::createCreativeAlone($data);
        } 
        elseif ($userType === 'entreprise') {
            return User::create([
                'name' => $data['name'],
                'phone' => $data['phone'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'date_creation' => $data['date_creation'],
                'siret' => $data['siret'],
                'lien' => $data['lien'],
            ]);
        } elseif ($userType === 'agence') {
            return User::create([
                'name' => $data['name'],
                'phone' => $data['phone'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'name_agent' => $data['name_agent'],
                'prenom' => $data['prenom'],
                'lien' => $data['lien'],
                'siret' => $data['siret'],
            ]);
    }
}
}
