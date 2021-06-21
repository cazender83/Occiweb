@extends('layout')

@section('page-content')
    <div>
        <h1>resultats de la recherche pour "{{$name}}"</h1>
        <h1>resultats des recettes</h1>
        <div class="progress" style="height: 1px;" >
            <div class="progress-bar w-100 bg-dark" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div style="padding-top: 25px">
            <table class="table table-bordered table-striped table-dark">
                <thead>
                <tr>
                    <th>titre</th>

                </tr>
                </thead>
                <tbody>
                @foreach($recettes as $recette)

                    <tr>
                        <td>{{ $recette->titre }}</td>

                        <td class="d-flex justify-content-around">

                            <a href="{{ route("recettes.show", $recette->id) }}" class="btn btn-warning">details</a>

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <h1>resultats des utilisateurs </h1>
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
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
