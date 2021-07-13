@extends('layout')

@section('page-content')
    @foreach($recettes as $recette)

    <div class="ingredients" class="container">
        <h1>ingredients de {{ $recette->titre }}</h1>
        <div style="padding-top: 25px">

            <form method="post" action="{{ route('ingredients.addInRecette', $recette->id) }}">
                @csrf
                @foreach($ingredients as $ingredient)
                    <div>
                        <input type="checkbox" id="{{ $ingredient->nom }}" name="ingredient[]" value="{{ $ingredient->id }}">
                        <img src="{{ URL::to('/images/ingredient/'.$ingredient->image) }}" height="60" width="60" >
                        <label for="{{ $ingredient->nom }}">{{ $ingredient->nom }}</label>
                        <br>
                        <label>Quantiter en {{ $ingredient->desi_qt }}:</label><br>
                        <input type="number" name="{{ $ingredient->id }}">
                    </div>
                @endforeach
                <div>
                    <button type="submit">Ajouter</button>
                </div>
            </form>
        </div>
    </div>
    @endforeach

@endsection

