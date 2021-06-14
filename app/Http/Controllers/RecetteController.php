<?php

namespace App\Http\Controllers;

use App\Models\Recette;
use Illuminate\Http\Request;

class RecetteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recettes = Recette::get()->all();
        return view('recettes.index', compact('recettes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('recettes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $titre = $request->input('titre');
        $progression = $request->input('progression');
        $remarque = $request->input('remarque');
        $etape = $request->input('etape');
        $video = $request->input('video');
        $image = $request->input('image');

        $recette = new Recette;
        $recette->titre = $titre;
        $recette->progression = $progression;
        $recette->remarque = $remarque;
        $recette->etape = $etape;
        $recette->video = $video;
        $recette->image = $image;
        $recette->save();
        return redirect()->route('recettes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recette  $recette
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $recette = Recette::findOrFail($id);
        return view('recettes.show', compact('recette'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Recette  $recette
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $recettes = recette::findOrFail($id);
        return view('recettes.edit', compact('recettes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Recette  $recette
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $titre = $request->input('titre');
        $progression = $request->input('progression');
        $remarque = $request->input('remarque');
        $etape = $request->input('etape');
        $video = $request->input('video');
        $image = $request->input('image');

        $recette = Recette::findOrFail($id);
        $recette->titre = $titre;
        $recette->progression = $progression;
        $recette->remarque = $remarque;
        $recette->etape = $etape;
        $recette->video = $video;
        $recette->image = $image;
        $recette->update();
        return redirect()->route('recettes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recette  $recette
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recette $recette)
    {
        //
    }
}
