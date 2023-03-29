@props(["nav"])

<nav class="navbar navbar-dark bg-dark menu navbar-expand-lg bg-body-tertiary sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('accueil') }}">
            <img src="/images/logo.png" alt="Logo AutoPalooza">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('accueil') }}">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('activites') }}">Activités</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('programmation') }}">Programmation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('forfaits') }}">Forfaits</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                </li>
                @guest
                <li class="nav-item">
                    <a class="nav-link connexion" href="{{ route('login')}}">Se connecter</a>
                </li>
                @endguest
                @auth
                <li class="nav-item">
                    <a class="nav-link connexion" href="{{ route('deconnexion')}}">Se déconnecter</a>
                </li>
                @endauth
                <li class="nav-item">
                    <a href="{{ route('reservation') }}" id="cart-toggle-bt">🛒</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
