<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UpdateUserRequest;

use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        if(Auth::user()->user_type != 'admin') {
            return redirect()->route('jobs.index')->with('error', 'Vous n\'avez pas les droits pour effectuer cette action');
        } else {
        $user = User::all();
        return view('admin.user.index', [
            'user' => $user,
            // 'filter' => $request->only(['ugc-search'])
        ]);
        }
    }

    public function edit($id)
    {
        
        $user = User::find($id);
        return view('admin.user.edit', compact('user'));
    }

    public function update(UpdateUserRequest $request, $id)
    {
        if(Auth::user()->user_type != 'admin') {
            return redirect()->route('jobs.index')->with('error', 'Vous n\'avez pas les droits pour effectuer cette action');
        } else {
        $user = User::find($id);
        $validatedData = $request->validated();

        $user->firstname = $validatedData['firstname'];
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->password = $validatedData['password'];
        $user->phone = $validatedData['phone'];
        $user->save();
        return redirect()->route('user.index');
        }
    }

    public function destroy($id)
    {
        if(Auth::user()->user_type != 'admin') {
            return redirect()->route('jobs.index')->with('error', 'Vous n\'avez pas les droits pour effectuer cette action');
        } else {
            // Recherche de l'utilisateur par son ID
            $user = User::find($id);
            
            // Vérifie si l'utilisateur existe
            if ($user) {
                // Si l'utilisateur existe, supprime-le
                $user->delete();
                // Redirection vers la route 'user.index' après la suppression
                return redirect()->route('user.index');
            } else {
                // Si l'utilisateur n'existe pas, vous pouvez choisir de rediriger
                // vers une autre page ou afficher un message d'erreur, selon vos besoins.
                return redirect()->back()->with('error', 'Utilisateur non trouvé.');
            }
        }
    }

}