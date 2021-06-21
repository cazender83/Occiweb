@extends('layout')

@section('page-content')
    <div class="recettes">
        <h1>Detail</h1>

        <div class="progress" style="height: 1px;" >
            <div class="progress-bar w-100 bg-dark" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
        </div>

        <div style="padding-top: 25px">
            <h1>{{ $ingredient->nom }}</h1>

            <div>
                <h3>Ingredients:</h3>
                <div style="padding-top: 25px">
                    <table class="table table-bordered table-striped table-dark">
                        <thead>
                        <tr>
                            <th>nom</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($ingredient->recette as $recette)
                            <tr>
                                <td>{{ $recette->titre }}</td>
                                <td class="d-flex justify-content-around">
                                    <a href="{{ route("recettes.show", $recette->id) }}" class="btn btn-warning">Details</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

    </div>

@endsection
