@extends('layout')

@section('page-content')


    <div class="container">
        <h1>Modification compte</h1>
        <div style="padding-top: 25px">
            <form method="post" action="{{ route('utilisateurs.update', $utilisateur->id) }}">
                {{ method_field('PUT') }}
                @csrf
                <div class="card border-dark " style="width: 18rem;">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <label>Username :</label><br>
                            <input type="text" name="username" required="required" value="{{ $utilisateur->username }}">
                        </li>
                        <li class="list-group-item">
                            <label>Mot de Passe :</label><br>
                            <input type="text" name="password" required="required" value="{{ $utilisateur->password}}">
                        </li>
                        <li class="list-group-item">
                            <label>Numero de telephone :</label><br>
                            <input type="number" name="numero" required="required" value="{{ $utilisateur->numero }}">
                        </li>
                        <li class="list-group-item">
                            <label>Email :</label><br>
                            <input type="email" name="email" required="required" value="{{ $utilisateur->email }}">
                        </li>
                        <li class="list-group-item">
                            <label>Type de compte:</label><br>
                            <select name="type" type="text">
                                <option value="1">administrateur</option>
                                <option value="0">utilisateur</option>
                            </select>
                        </li>
                        <li class="list-group-item">
                            <button type="submit" class="btn btn-primary">modification</button>
                        </li>
                    </ul>
                </div>
            </form>
        </div>
    </div>

@endsection

