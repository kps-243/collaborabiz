<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Http\Livewire\RegisterForm;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest');
    }

    // protected function validator(Request $request)
    // {
    //     return Validator::make($request->all(), [
    //         'name' => ['required', 'string', 'max:255'],
    //         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    //         'password' => ['required', 'string', 'min:8', 'confirmed'],
    //         // 'prenom' => ['required', 'string'],
    //         // 'date_naissance' => ['required', 'date'],
    //         // 'date_creation' => ['required', 'date'],
    //         // 'siret' => ['required', 'string'],
    //         // 'lien' => ['required', 'url'],
    //         // 'phone' => ['required', 'string'],
    //         // 'name_agent' => ['required', 'string'],
    //     ]);
    // }
    protected function validator(array $data)
    {
        $rules = [
            'firstname' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone' => ['required', 'string', 'max:255'],
            'user_type' => ['required', 'string', Rule::in(['entreprise', 'agence', 'createur'])],
        ];

        // // Ajoutez des règles spécifiques en fonction du type d'utilisateur
        // if ($data['user_type'] === 'createur') {
        //     $rules['firstname'] = ['required', 'string', 'max:255'];
        //     $rules['birthdate'] = ['required', 'date'];
        // } elseif ($data['user_type'] === 'entreprise') {
        //     $rules['siret'] = ['required', 'string', 'max:255'];
        //     $rules['date_creation'] = ['required', 'date'];
        // }

        return Validator::make($data, $rules);
    }

    protected function create(array $data)
    {
        if (!isset($data['user_type'])) {
            // Si elle n'existe pas, attribue-lui la valeur par défaut "createur"
            $data['user_type'] = 'createur';
        }
        $user = User::create([
            'firstname' => $data['firstname'],
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'phone' => $data['phone'],
            'user_type' => $data['user_type'], // Ajoutez le champ user_type à la création de l'utilisateur
        ]);
    
        // // Attribution du rôle en fonction du type d'utilisateur
        // $user->assignRole($data['user_type']);
    
        // // Mise à jour des champs spécifiques en fonction du type d'utilisateur
        // if ($data['user_type'] === 'entreprise' || $data['user_type'] === 'agence') {
        //     // Spécifique aux entreprises et agences : numéro de SIRET et date de création
        //     $user->update([
        //         'siret' => $data['siret'],
        //         'date_creation' => $data['date_creation'],
        //     ]);
        // } elseif ($data['user_type'] === 'createur') {
        //     // Spécifique aux créateurs : date de naissance et prénom
        //     $user->update([
        //         'birthdate' => $data['birthdate'],
        //         'firstname' => $data['firstname'],
        //     ]);
        // }
    
        return $user;
    }




    // protected function create(Request $request)
    // {
    //     $validator = $this->validator($request);

    //     if ($validator->fails()) {
    //         return redirect()->back()->withErrors($validator)->withInput();
    //     }
    //     // $userType = $request['user_type'];

    //     if ($request) {
    //         return User::create([
    //             'name' => $request['name'],
    //             // 'phone' => $request['phone'],
    //             'email' => $request['email'],
    //             'password' => Hash::make($request['password']),
    //             // 'prenom' => $request['prenom'],
    //             // 'date_naissance' => $request['date_naissance'],
    //         ]);
    //     } 
    //     // elseif ($userType === 'entreprise') {
    //     //     return User::create([
    //     //         'name' => $request['name'],
    //     //         'phone' => $request['phone'],
    //     //         'email' => $request['email'],
    //     //         'password' => Hash::make($request['password']),
    //     //         // 'date_creation' => $request['date_creation'],
    //     //         // 'siret' => $request['siret'],
    //     //         // 'lien' => $request['lien'],
    //     //     ]);
    //     // } elseif ($userType === 'agence') {
    //     //     return User::create([
    //     //         'name' => $request['name'],
    //     //         // 'phone' => $request['phone'],
    //     //         'email' => $request['email'],
    //     //         'password' => Hash::make($request['password']),
    //     //         // 'name_agent' => $request['name_agent'],
    //     //         // 'prenom' => $request['prenom'],
    //     //         // 'lien' => $request['lien'],
    //     //         // 'siret' => $request['siret'],
    //     //     ]);
    //     // }
    // }
}
