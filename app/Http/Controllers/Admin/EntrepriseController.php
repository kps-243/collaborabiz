<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Entreprise;
use App\Http\Requests\StoreEntrepriseRequest;
use App\Http\Requests\UpdateEntrepriseRequest;

class EntrepriseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $this->authorize('manage', User::class);
        $entreprises = Entreprise::all();
        return view('admin.entreprises.index', [
            'entreprises' => $entreprises,
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
        return view('admin.entreprises.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEntrepriseRequest $request)
    {
        $this->authorize('create', Entreprise::class);
        $validatedData = $request->validated();

        // Créez et enregistrez l'entreprise en utilisant les données validées
        $entreprise = new Entreprise($validatedData);
        $entreprise->name = $request->input('name');
        $entreprise->date_creation = $request->input('date_creation');
        $entreprise->email = $request->input('email');
        $entreprise->password = $request->input('password');
        $entreprise->phone = $request->input('phone');
        $entreprise->siret = $request->input('siret');
        $entreprise->link = $request->input('link');
        $entreprise->save();

        return redirect()->route('entreprises.index');
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
        $entreprise = Entreprise::findOrFail($id);
        return view('admin.entreprises.edit', [
            'entreprise' => $entreprise
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEntrepriseRequest $request, $id)
    {
        $entreprise = Entreprise::findOrFail($id);
        $entreprise->name = $validatedData['name'];
        $entreprise->date_creation = $validatedData['date_creation'];
        $entreprise->email = $validatedData['email'];
        $entreprise->password = $validatedData['password'];
        $entreprise->phone = $validatedData['phone'];
        $entreprise->siret = $validatedData['siret'];
        $entreprise->link = $validatedData['link'];
        $entreprise->save();

        // Redirigez l'utilisateur ou effectuez d'autres actions en fonction de vos besoins
        return redirect()->route('entreprises.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $entreprise = Entreprise::find($id);

        if (!$entreprise) {
            return redirect()->route('entreprises.index')->with('error', 'Personne non trouvé');
        }

        $entreprise->delete();
        return redirect()->route('entreprises.index')->with('success', 'Personne supprimé avec succès');
    }
}
