<nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="/">
        <img src="/images/Logo_SM.png" alt="Logo Shadow Makers">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/administration">Accueil</a>
            </li>
            @if( $userAuth->hasRole('Administrateur') )
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarGestion" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    Gestion des comptes
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarGestion">
                    <a class="dropdown-item" href="/administration/listeComptes">Liste des comptes</a>
                    <a class="dropdown-item" href="/administration/creerCompte">Créer un compte</a>
                </div>
            </li>
            @endif
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarParametre" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    Paramètres
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarParametre">
                    <a class="dropdown-item" href="/administration/compte">Compte</a>
                    <a class="dropdown-item" href="/administration/informations">Informations</a>
                </div>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
    </div>
</nav>
