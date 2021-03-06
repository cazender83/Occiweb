@extends('layout')

@section('page-content')
    <div class="recettes">
        <h1>Detail de la recette</h1>

        <div class="progress" style="height: 1px;" >
            <div class="progress-bar w-100 bg-dark" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
        </div>

        <div style="padding-top: 25px">
            <a href="{{ route("recettes.edit", $recette->id) }}" class="btn btn-info">Edit</a>
            <h1>{{ $recette->titre }}</h1>
            <video controls poster="images/{{ $recette->image }}" width="900">
                <source src="video/{{ $recette->video }}" type="video/mp4">
            </video>
            <div>
                <h3>Ingredients:</h3>
                <div style="padding-top: 25px">
                    <table class="table table-bordered table-striped table-dark">
                        <thead>
                        <tr>
                            <th>ingredient</th>
                            <th>nom</th>
                            <th>quantites</th>
                            <th>grammage</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($recette->ingredient as $ingredient)
                        <tr>
                            <td><img src="{{ URL::to('/images/ingredient/'.$ingredient->image) }}" height="60" width="60" ></td>
                            <td>{{ $ingredient->nom }}</td>
                            <td>{{ $ingredient->pivot->quantite }}</td>
                            <td>{{ $ingredient->desi_qt }}</td>



                            <td class="d-flex justify-content-around">

                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <h3>Progression de la recette :</h3>
            <p>{{ $recette->progression }}</p>
            <h3>Remarques :</h3>
            <p>{{ $recette->remarque }}</p>
            <h3>Etapes :</h3>
            <p>{{ $recette->etape }}</p>

        </div>

    </div>

@endsection
