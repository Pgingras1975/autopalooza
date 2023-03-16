@props(["nav"])

<nav class="navbar menu bg-body-tertiary sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="/images/logo.png" alt="Logo AutoPalooza" class="img-fluid">
        </a>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/') }}">Accueil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('activites') }}">Activités</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/forfaits') }}">Forfaits</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
            </li>
            @guest
            <li class="nav-item">
                <a class="nav-link connexion" href="{{ route('login')}}">Connexion</a>
            </li>
            @endguest
            @auth
            <li class="nav-item">
                <a class="nav-link connexion" href="{{ route('deconnexion')}}">Déconnexion</a>
            </li>
            @endauth

            <li>
                <a href="/reservation" id="cart-toggle-bt">🛒</a>
            </li>
        </ul>
    </div>
</nav>
