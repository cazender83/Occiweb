@extends('layout')

@section('page-content')


    <div class="container">
        <h1>Liste des ingredients</h1>
        <div class="progress" style="height: 1px;" >
            <div class="progress-bar w-100 bg-dark" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div style="padding-top: 25px">
            <table class="table table-bordered table-striped table-dark">
                <thead>
                <tr>
                    <th>image</th>
                    <th>nom</th>
                    <th>type de grammage</th>

                </tr>
                </thead>
                <tbody>
                @foreach($ingredients as $ingredient)
                    <tr>
                        <td>{{ $ingredient->nom }}</td>
                        <td>{{ $ingredient->image }}</td>
                        <td>{{ $ingredient->desi_qt }}</td>
                        <td class="d-flex justify-content-around">
                            <a href="{{ route("ingredients.edit", $ingredient->id) }}" class="btn btn-warning">edit</a>
                            <a href="{{ route("ingredients.show", $ingredient->id) }}" class="btn btn-warning">Details</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
