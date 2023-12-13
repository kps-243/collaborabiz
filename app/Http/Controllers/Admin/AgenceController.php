<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Agence;
use App\Http\Requests\StoreAgenceRequest;
use App\Http\Requests\UpdateAgenceRequest;

use Illuminate\Support\Facades\Hash;


class AgenceController extends Controller
{
    public function index()
    {
       
        $agence = Agence::all();
        return view('admin.agence.index', [
            'agence' => $agence,
            // 'filter' => $request->only(['ugc-search'])
        ]);
    }

    public function create()
    {
        return view('admin.agence.create');
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
        $agence = Agence::find($id);
        return view('admin.agence.edit', compact('agence'));
    }

    public function update(UpdateAgenceRequest $request, $id)
    {
        $agence = Agence::find($id);
        $agence->update($request->all());
        return redirect()->route('agence.index');
    }

    public function destroy($id)
    {
        $agence = Agence::find($id);
        $agence->delete();
        return redirect()->route('agence.index');
    }
}