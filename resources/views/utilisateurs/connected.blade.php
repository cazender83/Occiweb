@extends('layout')

@section('page-content')

    @foreach($account as $accounts)

        <?php session(['users' => $accounts->id])?>
        <?php session(['type' => $accounts->type])?>

        <div class="container">
            <h1>Bienvenue {{$accounts->username}} </h1>
        </div>
    @endforeach

@endsection
