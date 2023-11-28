<?php

namespace App\Http\Controllers;

use App\Models\Agence;

use Illuminate\Http\Request;
use App\Http\Requests\StoreAgenceRequest;
use App\Http\Requests\UpdateAgenceRequest;

use Illuminate\Support\Facades\Hash;


class AgenceController extends Controller
{
    public function index()
    {
        $agence = Agence::all();
        return view('inscription.agence', compact('agence'));
    }

    public function create()
    {
        return view('agence.create');
    }

    public function store(StoreAgenceRequest $request)
    {
        $data = $request->all();
        $data['password'] = Hash::make($request->input('password'));
        Agence::create($data);
        return redirect()->route('agence.index');
    }

    public function edit($id)
    {
        $Agence = Agence::find($id);
        return view('agence.edit', compact('Agence'));
    }

    public function update(UpdateAgenceRequest $request, $id)
    {
        $Agence = Agence::find($id);
        $Agence->update($request->all());
        return redirect()->route('agence.index');
    }

    public function destroy($id)
    {
        $Agence = Agence::find($id);
        $Agence->delete();
        return redirect()->route('agence.index');
    }
}