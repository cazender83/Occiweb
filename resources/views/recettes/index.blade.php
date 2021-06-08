@extends('layout')

@section('page-content')


    <div class="container">
        <img src="../../images/logo_index.jpg" alt="font-index">
    </div>
    <div class="container">
        <h1>recettes:</h1>
        <div class="progress" style="height: 1px;" >
            <div class="progress-bar w-100 bg-dark" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div style="padding-top: 25px">
            @foreach($recettes as $recette)
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            {{--<img src="{{ URL::to('/images/'.$recette->image) }}" alt="...">--}}
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{ $recette->titre }}</h5>
                                <a href="{{ route("recettes.show", $recette->id) }}" class="btn btn-warning">Details</a>

                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>

@endsection
