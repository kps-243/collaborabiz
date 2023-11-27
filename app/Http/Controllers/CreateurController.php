<?php

namespace App\Http\Controllers;

use App\Models\Createur;

use Illuminate\Http\Request;
use App\Http\Requests\StoreCreateurRequest;
use App\Http\Requests\UpdateCreateurRequest;


class CreateurController extends Controller
{
    public function index()
    {
        $createurs = Createur::all();
        return view('inscription.createur', compact('createurs'));
    }

    public function create()
    {
        return view('createurs.create');
    }

    public function store(StoreCreateurRequest $request)
    {
        Createur::create($request->all());
        return redirect()->route('createurs.index');
    }

    public function edit($id)
    {
        $createur = Createur::find($id);
        return view('createurs.edit', compact('createur'));
    }

    public function update(UpdateCreateurRequest $request, $id)
    {
        $createur = Createur::find($id);
        $createur->update($request->all());
        return redirect()->route('createurs.index');
    }

    public function destroy($id)
    {
        $createur = Createur::find($id);
        $createur->delete();
        return redirect()->route('createurs.index');
    }
}