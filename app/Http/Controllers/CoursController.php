<?php

namespace App\Http\Controllers;

use App\Models\Cours;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CoursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cours = Cours::all();
        // dd('Liste des cours crées');
        return view('cours.index', compact('cours'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // dd('Dans l\'espace de creation');
        return view('cours.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // if ($guard == "enseignant" && Auth::guard($guard)->check()) {
        // dd(Auth::guard('enseignant')->check());
        if (Auth::guard('enseignant')->check()) {
            $id_enseignant = Auth::guard('enseignant')->id();
        }
        // dd('je suis le store');
        $this->validate($request, [
            'libelle_cours' => 'required | min:3',
            // 'description' => 'required | min:5'
        ]);

        Cours::create([
            'libelle_cours' => $request->libelle_cours,
            'id_enseignant_fk' => $id_enseignant,
        ]);
        return redirect(route('cours.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // dd('dans le show');
        // $section = Cours::findOrfail($id);
        $section = Cours::find($id)->section->first();
        $id_cours = $id;
        // dd($section);
        return view('cours.show', compact('section', 'id_cours'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
