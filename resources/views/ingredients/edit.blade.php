@extends('layout')

@section('page-content')


    <div class="ingredients" class="container">
        <h1>Modification d'un ingredient</h1>
        <div style="padding-top: 25px">

            <form method="post" action="{{ route('ingredients.update', $ingredients->id) }}">
                {{ method_field('PUT') }}
                @csrf
                <div class="card border-dark " style="width: 40%;">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <label>Nom de l'ingredient':</label><br>
                            <input type="text" name="nom" required="required" value="{{ $ingredients->nom }}">
                        </li>
                        <li class="list-group-item">
                            <label>Image de l'ingredient:</label><br>
                            <input type="text" name="image" required="required" value="{{ $ingredients->image }}">
                        </li>
                        <li class="list-group-item">
                            <label>type de grammage de l'ingredient:</label><br>
                            <input type="text" name="grammage" required="required" value="{{ $ingredients->desi_qt }}">
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

