<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUgcRequest;
use App\Http\Requests\UpdateUgcRequest;
use App\Models\Ugc;

class UgcController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $this->authorize('manage', User::class);
        $ugcs = Ugc::all();
        return view('admin.ugcs.index', [
            'ugcs' => $ugcs,
            // 'filter' => $request->only(['ugc-search'])
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $this->authorize('manage', User::class);

        return view('admin.ugcs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUgcRequest $request)
    {
        $validatedData = $request->validated();

        $ugc = new Ugc();
        $ugc->title = $request->input('title');
        $ugc->text = $request->input('text');
        $ugc->save();

        return redirect()->route('ugcs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ugc = Ugc::findOrFail($id);
        return view('admin.ugcs.edit', [
            'ugc' => $ugc
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUgcRequest $request, $id)
    {
        $ugc = Ugc::findOrFail($id);
        $ugc->title = $request->input('title');
        $ugc->text = $request->input('text');
        $ugc->save();

        return redirect()->route('ugcs.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ugc = Ugc::find($id);

        if (!$ugc) {
            return redirect()->route('ugcs.index')->with('error', 'Personne non trouvé');
        }

        $ugc->delete();
        return redirect()->route('ugcs.index')->with('success', 'Personne supprimé avec succès');
    }
}
