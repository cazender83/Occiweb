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
        $animauxFirst = Gallery::where('image','like','%animaux%')->limit(1)->get();
        $animaux = Gallery::where('image','like','%animaux%')->skip(1)->limit(100)->get();
        $architectureFirst = Gallery::where('image','like','%architecture%')->limit(1)->get();
        $architecture = Gallery::where('image','like','%architecture%')->get();
        $diversFirst = Gallery::where('image','like','%divers%')->limit(1)->get();
        $divers = Gallery::where('image','like','%divers%')->get();
        $fleursFirst = Gallery::where('image','like','%fleurs%')->limit(1)->get();
        $fleurs = Gallery::where('image','like','%fleurs%')->get();
        $merFirst = Gallery::where('image','like','%mer%')->limit(1)->get();
        $mer = Gallery::where('image','like','%mer%')->get();
        $motosFirst = Gallery::where('image','like','%motos%')->limit(1)->get();
        $motos = Gallery::where('image','like','%motos%')->get();
        $natureFirst = Gallery::where('image','like','%nature%')->limit(1)->get();
        $nature = Gallery::where('image','like','%nature%')->get();
        $voituresFirst = Gallery::where('image','like','%voitures%')->limit(1)->get();
        $voitures = Gallery::where('image','like','%voitures%')->get();
        return view('gallery.index', compact('animauxFirst','animaux', 'architectureFirst','architecture', 'divers', 'diversFirst', 'fleurs',  'fleursFirst', 'mer', 'merFirst', 'motos', 'motosFirst', 'nature', 'natureFirst', 'voitures', 'voituresFirst'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
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
