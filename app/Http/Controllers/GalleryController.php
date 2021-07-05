<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $animauxFirst = Gallery::where('categorie','like','%animaux%')->limit(1)->get();
        $animaux = Gallery::where('categorie','like','%animaux%')->skip(1)->limit(100)->get();
        $architectureFirst = Gallery::where('categorie','like','%architecture%')->limit(1)->get();
        $architecture = Gallery::where('categorie','like','%architecture%')->skip(1)->limit(100)->get();
        $diversFirst = Gallery::where('categorie','like','%divers%')->limit(1)->get();
        $divers = Gallery::where('categorie','like','%divers%')->skip(1)->limit(100)->get();
        $fleursFirst = Gallery::where('categorie','like','%fleurs%')->limit(1)->get();
        $fleurs = Gallery::where('categorie','like','%fleurs%')->skip(1)->limit(100)->get();
        $merFirst = Gallery::where('categorie','like','%mer%')->limit(1)->get();
        $mer = Gallery::where('categorie','like','%mer%')->skip(1)->limit(100)->get();
        $motosFirst = Gallery::where('categorie','like','%motos%')->limit(1)->get();
        $motos = Gallery::where('categorie','like','%motos%')->skip(1)->limit(100)->get();
        $natureFirst = Gallery::where('categorie','like','%nature%')->limit(1)->get();
        $nature = Gallery::where('categorie','like','%nature%')->skip(1)->limit(100)->get();
        $voituresFirst = Gallery::where('categorie','like','%voitures%')->limit(1)->get();
        $voitures = Gallery::where('categorie','like','%voitures%')->skip(1)->limit(100)->get();
        return view('gallery.index', compact('animauxFirst','animaux', 'architectureFirst','architecture', 'divers', 'diversFirst', 'fleurs',  'fleursFirst', 'mer', 'merFirst', 'motos', 'motosFirst', 'nature', 'natureFirst', 'voitures', 'voituresFirst'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = $request->input('image');
        $alt = $request->input('alt');
        $categorie = $request->input('categorie');

        $picture = new Gallery;
        $picture->image = $image;
        $picture->alt = $alt;
        $picture->categorie = $categorie;
        $picture->save();
        return redirect()->route('gallery.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show($name)
    {
        $pictures = Gallery::where('categorie','like','%'.$name.'%')->get();
        return view('gallery.show', compact('pictures'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        //
    }
}
