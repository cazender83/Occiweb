@extends('layout')

@section('page-content')


    <div class="container">
        <img src="../../images/logo_index.jpg" alt="font-index">
    </div>
    <div class="container">
        <h1>Evenements Futurs</h1>
        <div class="progress" style="height: 1px;" >
            <div class="progress-bar w-100 bg-dark" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div style="padding-top: 25px">
            @foreach($articles as $article)
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="images/{{ $article->image }}" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{ $article->titre }}</h5>
                                <p class="card-text">{{ $article->description }}</p>
                                <video controls poster="images/{{ $article->image }}" width="900">
                                    <source src="video/{{ $article->video }}" type="video/mp4">
                                </video>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>

@endsection
