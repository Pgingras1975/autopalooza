@props(["nav"])

<nav class="navbar navbar-dark bg-dark menu navbar-expand-lg bg-body-tertiary sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="/images/logo.png" alt="Logo AutoPalooza">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/activites') }}">Activités</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/programmation') }}">Programmation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/forfaits') }}">Forfaits</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
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
                <li>
                    <a href="{{ url('/reservation') }}" id="cart-toggle-bt">🛒</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
