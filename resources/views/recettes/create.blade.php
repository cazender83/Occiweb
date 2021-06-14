@extends('layout')

@section('page-content')


    <div class="container">
        <h1>ajout d'une recette</h1>
        <div style="padding-top: 25px">
            <form method="post" action="{{ route('recettes.store') }}">
                @csrf
                <div class="card border-dark " style="width: 40%;">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <label>Titre de la recette:</label><br>
                            <input type="text" name="titre" required="required">
                        </li>
                        <li class="list-group-item">
                            <label>Progression de la recette:</label><br>
                            <textarea name="progression" rows="5" cols="30" ></textarea>
                        </li>
                        <li class="list-group-item">
                            <label>Remarque:</label><br>
                            <textarea name="remarque" rows="5" cols="30" ></textarea>
                        </li>
                        <li class="list-group-item">
                            <label>Etapes</label><br>
                            <textarea name="etape" rows="5" cols="30" ></textarea>
                        </li>
                        <li class="list-group-item">
                            <label>Video:</label><br>
                            <input type="text" name="video" required="required">
                        </li>
                        <li class="list-group-item">
                            <label>Image:</label><br>
                            <input type="text" name="image" required="required">
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

