<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="welcome.blade.php"><h2>OcciWeb</h2></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ URL::route('recettes.create') }}">NOUVELLE RECETTE <span class="sr-only">(current)</span></a>
            </li>
            <?php if(session()->has('users'))
            {
            $idu = session('users');
            ?>
            <li class="nav-item active">
                <a class="nav-link" href="{{ URL::route('utilisateurs.deconnect',$idu) }}">Deconnection <span class="sr-only">(current)</span></a>
            </li>
            <?php }  else { ?>
            <li class="nav-item active">
                <a class="nav-link" href="{{ URL::route('utilisateurs.connect') }}">Connexion <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{ URL::route('utilisateurs.create') }}">s'inscrire <span class="sr-only">(current)</span></a>
            </li>
            <?php } ?>
        </ul>

        <form class="d-flex" method="post" action="{{ URL::route('articles.searchR') }}">
            {{ method_field('GET') }}
            @csrf
            <input class="form-control me-2" type="search" name="search" placeholder="Rechercher..." aria-label="search" style="margin-right:5%" >
            <button class="btn btn-dark" type="submit">RECHERCHER</button>
        </form>
    </div>
</nav>
