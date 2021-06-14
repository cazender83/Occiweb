@extends('layout')

@section('page-content')


    <div class="container">
        <h1>Liste des utilisateurs</h1>
        <div class="progress" style="height: 1px;" >
            <div class="progress-bar w-100 bg-dark" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div style="padding-top: 25px">
            <table class="table table-bordered table-striped table-dark">
                <thead>
                <tr>
                    <th>Username</th>
                    <th>Mot de Passe</th>
                    <th>Email</th>
                    <th>Numero de telephone</th>
                    <th>Admin</th>
                </tr>
                </thead>
                <tbody>
                @foreach($utilisateurs as $utilisateur)
                    <tr>
                        <td>{{ $utilisateur->username }}</td>
                        <td>{{ $utilisateur->password }}</td>
                        <td>{{ $utilisateur->email }}</td>
                        <td>+33 {{ $utilisateur->numero }}</td>
                        <?php if ($utilisateur->admin == 1) { ?>
                            <td>oui</td>
                        <?php } else { ?>
                            <td>non</td>
                        <?php } ?>
                        <td class="d-flex justify-content-around">
                            <a href="{{ route("utilisateurs.edit", $utilisateur->id) }}" class="btn btn-warning">edit</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
