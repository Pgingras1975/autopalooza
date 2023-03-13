@props(["nav"])

<nav class="navbar menu bg-body-tertiary sticky-top">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="/storage/logo.png" alt="Logo AutoPalooza" width="100">
        </a>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">Accueil</a>
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
            <li class="nav-item">
                <a class="nav-link connexion" href="{{ route('login')}}">Connexion</a>
            </li>
            <li>
                <a class="nav-link connexion" href="{{ route('deconnexion')}}">Déconnexion</a>
            </li>
        </ul>
    </div>
</nav>
