<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Createur;
use App\Http\Requests\StoreCreateurRequest;
use App\Http\Requests\UpdateCreateurRequest;

use Illuminate\Support\Facades\Hash;

class CreateurController extends Controller
{
    public function index()
    {
        $createur = Createur::all();
        return view('admin.createur.index', [
            'createur' => $createur,
            // 'filter' => $request->only(['ugc-search'])
        ]);
    }

    public function create()
    {
        return view('admin.createur.create');
    }

    public function store(StoreCreateurRequest $request)
    {
        $data = $request->all();
        $data['password'] = Hash::make($request->input('password'));
        Createur::create($data);
        return redirect()->route('createurs.index');
    }

    public function edit($id)
    {
        $createur = Createur::find($id);
        return view('admin.createur.edit', compact('createur'));
    }

    public function update(UpdateCreateurRequest $request, $id)
    {
        $createur = Createur::find($id);
        $createur->update($request->all());
        return redirect()->route('createur.index');
    }

    public function destroy($id)
    {
        $createur = Createur::find($id);
        $createur->delete();
        return redirect()->route('admin.createur.index');
    }
}