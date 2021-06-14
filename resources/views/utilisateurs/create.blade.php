@extends('layout')

@section('page-content')


    <div class="container">
        <h1>Nouveaux compte</h1>
        <div style="padding-top: 25px">
            <form method="post" action="{{ route('utilisateurs.store') }}">
                @csrf
                <div class="card border-dark " style="width: 18rem;">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <label>Username :</label><br>
                            <input type="text" name="username" required="required">
                        </li>
                        <li class="list-group-item">
                            <label>Mot de Passe :</label><br>
                            <input type="text" name="password" required="required">
                        </li>
                        <li class="list-group-item">
                            <label>Numero de telephone :</label><br>
                            <input type="number" name="numero" required="required">
                        </li>
                        <li class="list-group-item">
                            <label>Email :</label><br>
                            <input type="email" name="email" required="required">
                        </li>
                        <li class="list-group-item">
                            <button type="submit" class="btn btn-primary">creation</button>
                        </li>
                    </ul>
                </div>
            </form>
        </div>
    </div>

@endsection

