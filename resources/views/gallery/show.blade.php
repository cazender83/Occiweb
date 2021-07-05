@extends('layout')

@section('page-content')
    <div class="recettes">
        <h1>Gallery</h1>

        <div class="progress" style="height: 1px;" >
            <div class="progress-bar w-100 bg-dark" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
        </div>

        <div style="padding-top: 25px">
            @foreach($pictures as $picture)
                <div class="card bg-dark text-white">
                    <img src="{{ URL::to('/images/gallery/'.$picture->categorie.'/'.$picture->image) }}" class="card-img" alt="{{ $picture->alt }}">
                </div>
            @endforeach
        </div>

    </div>

@endsection
