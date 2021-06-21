@extends('footer')
@extends('layout')

@section('page-content')


    <div class="recettes" class="container">
        <h1 class="title">AJOUTER UNE RECETTE</h1>
        <div class="form">
            <form method="post" action="{{ route('recettes.store') }}">
                @csrf
                <div>
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
                            <label>Etapes:</label><br>
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
                            <button type="submit" class="btn btn-dark">Ajouter</button>
                        </li>
                    </ul>
                </div>
            </form>
        </div>
    </div>

@endsection

