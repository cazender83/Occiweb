@extends('layout')

@section('page-content')


    <div class="container">
        <h1>modification d'une recette</h1>
        <div style="padding-top: 25px">

            <form method="post" action="{{ route('recettes.update', $recettes->id) }}">
                {{ method_field('PUT') }}
                @csrf
                <div class="card border-dark " style="width: 40%;">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <label>Titre de la recette:</label><br>
                            <input type="text" name="titre" required="required" value="{{ $recettes->titre}}">
                        </li>
                        <li class="list-group-item">
                            <label>Progression de la recette:</label><br>
                            <textarea name="progression" rows="5" cols="30">{{$recettes->progression}}</textarea>
                        </li>
                        <li class="list-group-item">
                            <label>Remarque:</label><br>
                            <textarea name="remarque" rows="5" cols="30">{{ $recettes->remarque}}</textarea>
                        </li>
                        <li class="list-group-item">
                            <label>Etapes</label><br>
                            <textarea name="etape" rows="5" cols="30">{{ $recettes->etape}}</textarea>
                        </li>
                        <li class="list-group-item">
                            <label>Video:</label><br>
                            <input type="text" name="video" required="required" value="{{ $recettes->video}}">
                        </li>
                        <li class="list-group-item">
                            <label>Image:</label><br>
                            <input type="text" name="image" required="required" value="{{ $recettes->image}}">
                        </li>
                        <li class="list-group-item">
                            <button type="submit" class="btn btn-primary">ajouter</button>
                        </li>
                    </ul>
                </div>
            </form>
        </div>
    </div>

@endsection

