@extends('layout')

@section('page-content')


    <?php Session()->forget('users')?>
    <?php Session()->forget('type')?>

    <div class="container">
        <h1>vous avez ete deconnect√© </h1>
    </div>

@endsection
