<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use App\Models\Recette;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IngredientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ingredients = ingredient::get()->all();
        return view('ingredients.index', compact('ingredients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ingredients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ingredient_it = 1;
        $nom = $request->input('nom');
        $image = $request->input('image');
        $desi_qt = $request->input('grammage');

        $ingredient = new Ingredient;
        $ingredient->nom = $nom;
        $ingredient->desi_qt = $desi_qt;
        $ingredient->image = $image;
        $ingredient->save();
        return redirect()->route('ingredients.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ingredient  $ingredient
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ingredient = Ingredient::findOrFail($id);
        return view('ingredients.show', compact('ingredient'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ingredient  $ingredient
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ingredients = ingredient::findOrFail($id);
        return view('ingredients.edit', compact('ingredients'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ingredient  $ingredient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $nom = $request->input('nom');
        $image = $request->input('image');
        $desi_qt = $request->input('grammage');

        $ingredient = ingredient::findOrFail($id);
        $ingredient->nom = $nom;
        $ingredient->desi_qt = $desi_qt;
        $ingredient->image = $image;
        $ingredient->update();
        return redirect()->route('ingredients.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ingredient  $ingredient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ingredient $ingredient)
    {
        //
    }

    public function addInRecette(Request $request, $id)
    {
        $ingredient_it = $request->input('ingredient');

        $value = count($ingredient_it);
        $recette = Recette::findOrFail($id);

        $temp = 0;
        while ($temp < $value) {
            $ingredient = Ingredient::findOrFail($ingredient_it[$temp]);
            $recette->ingredient()->attach($ingredient, ['quantite' => $request->input($ingredient->id)]);
            $temp = $temp + 1;
        }

        return redirect()->route('recettes.index');
    }
}
