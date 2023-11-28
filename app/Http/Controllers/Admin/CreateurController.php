<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Createur;
use App\Http\Requests\StoreCreateurRequest;
use App\Http\Requests\UpdateCreateurRequest;

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
        Createur::create($request->all());
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
        return redirect()->route('createur.index');
    }
}