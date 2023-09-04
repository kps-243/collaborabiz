<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
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
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function create(array $data)
{
    return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password']),
    ]);
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
