@extends('footer')
@extends('layout')

@section('page-content')


    <div class="recettes" class="container">
        <h1 class="title">AJOUTER UN INGREDIENT</h1>
        <div class="form">
            <form method="post" action="{{ route('ingredients.store') }}">
                @csrf
                <div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <label>Nom de l'ingredient':</label><br>
                            <input type="text" name="nom" required="required">
                        </li>
                        <li class="list-group-item">
                            <label>Image de l'ingredient:</label><br>
                            <input type="text" name="image" required="required">
                        </li>
                        <li class="list-group-item">
                            <label>type de grammage de l'ingredient:</label><br>
                            <input type="text" name="grammage" required="required">
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

