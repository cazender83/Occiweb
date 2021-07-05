@extends('footer')
@extends('layout')

@section('page-content')


    <div class="recettes" class="container">
        <h1 class="title">AJOUTER UNE IMAGE</h1>
        <div class="form">
            <form method="post" action="{{ route('gallery.store') }}">
                @csrf
                <div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <label>Nom de l'image :</label><br>
                            <input type="text" name="image" required="required">
                        </li>
                        <li class="list-group-item">
                            <label>Description de l'image :</label><br>
                            <input type="text" name="alt" required="required">
                        </li>
                        <li class="list-group-item">
                            <label>Categorie :</label><br>
                            <select name="categorie" type="text">
                                <option value="animaux">animaux</option>
                                <option value="architecture">architecture</option>
                                <option value="divers">divers</option>
                                <option value="fleurs">fleurs</option>
                                <option value="mer">mer</option>
                                <option value="nature">nature</option>
                                <option value="motos">motos</option>
                                <option value="voitures">voitures</option>
                            </select>
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

