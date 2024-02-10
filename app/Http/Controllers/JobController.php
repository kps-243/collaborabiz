<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Http\Requests\StoreJobRequest;
use App\Http\Requests\UpdateJobRequest;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = Job::all();
        
        return view('jobs.index', [
            'jobs' => $jobs,
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
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJobRequest $request)
    {
        // $this->authorize('create', job::class);
        $validatedData = $request->validated();
        

        // Créez et enregistrez l'job en utilisant les données validées
        $job = new Job($validatedData);
        $job->type = $request->input('type');
        $job->titre = $request->input('titre');
        $job->description = $request->input('description');
        $job->delais = $request->input('delais');
        $job->duree_collabz = $request->input('duree_collabz');
        $job->liens = $request->input('liens');
        $job->contraintes = $request->input('contraintes');
        if($request->hasFile('file')) {
            $job->addMediaFromRequest('file')->usingName($job->titre)->toMediaCollection("jobs");
        }
        if ($request->hasFile('image')) {
            // dd($request->hasFile('image'));
            $job->addMedia($request->file('image'))->toMediaCollection('job-image');
        }
        
        $job->save();

        return redirect()->route('front.jobs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $job = Job::where('slug', $slug)->with('media')->first();   
        return view('jobs.single', [
            'job' => $job,
            // 'filter' => $request->only(['ugc-search'])
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $job = Job::findOrFail($id);
        return view('jobs.edit', [
            'job' => $job
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateJobRequest $request, $id)
    {
        $job = Job::findOrFail($id);
        $validatedData = $request->validated();

        $job->type = $request->input('type');
        $job->titre = $request->input('titre');
        $job->description = $request->input('description');
        $job->delais = $request->input('delais');
        $job->duree_collabz = $request->input('duree_collabz');
        $job->liens = $request->input('liens');
        $job->contraintes = $request->input('contraintes');
        
        if ($request->hasFile('image')) {
            // dd($request->hasFile('image'));
            if (count($job->getMedia('job-image')) > 0) {
                $job->getMedia('job-image')[0]->delete();
            }
            $job->addMedia($request->file('image'))->toMediaCollection('job-image');
        }
        $job->save();

        // Redirigez l'utilisateur ou effectuez d'autres actions en fonction de vos besoins
        return redirect()->route('jobs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $job = Job::find($id);

        if (!$job) {
            return redirect()->route('jobs.index')->with('error', 'Personne non trouvé');
        }
        $job->delete();
        return redirect()->route('jobs.index')->with('success', 'Personne supprimé avec succès');
    }
}
