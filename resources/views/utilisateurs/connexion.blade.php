@extends('layout')

@section('page-content')


    <div class="container">
        <h1>Connection </h1>
        <div style="padding-top: 25px">
            <form class="form-inline my-2 my-lg-0" method="post" action="{{ URL::route('utilisateurs.connection') }}">
                {{ method_field('GET') }}
                @csrf
                <label>Username:</label><br>
                <input class="form-control mr-sm-2" name="username" type="text" placeholder="username"
                       aria-label="username">
                <label>Mot de Passe:</label><br>
                <input class="form-control mr-sm-2" name="password" type="text" placeholder="password"
                       aria-label="password">
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">connection</button>
            </form>
        </div>
    </div>

@endsection
