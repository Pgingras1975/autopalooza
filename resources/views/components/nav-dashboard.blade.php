<nav id='menu'>
    <input type='checkbox' id='responsive-menu' onclick='updatemenu()'><label></label>
    <ul class="nav-display">
        <li><a href="{{ route('accueil') }}">Accueil</a></li>
        @if ($authuserid == 1)
            <li><a class='dropdown-arrow'>Administrateur</a>
        @else
            <li><a class='dropdown-arrow'>Employés</a>
        @endif
        <ul class='sub-menus'>
          <li><a href='{{ url('/employe/modifier/pwd/' . $authuserid) }}'>Modifier mot de passe</a></li>
        </ul>
      </li>
      <li><a class='dropdown-arrow' href='#'>Ajout</a>
        <ul class='sub-menus'>
          <li><a href='{{ route('creer-activite') }}'>Activité</a></li>
          <li><a href='{{ route('creer-actualite') }}'>Actualité</a></li>
          <li><a href='{{ route('creer-forfait') }}'>Forfait</a></li>
          @if ($authuserid == 1)
            <li><a href='{{ route('creer-employe') }}'>Employé</a></li>
          @endif
        </ul>
      </li>
      <li class="nav-item"><a class="nav-link connexion" href='{{ url('/deconnexion') }}'>Déconnexion</a></li>
    </ul>
  </nav>
