@if(session('echec-connexion'))
<p class="alert alert-danger text-center m-auto">{{ session('echec-connexion') }}</p>
@endif

@if(session('success-deconnexion'))
<p class="alert alert-danger text-center m-auto">{{ session('success-deconnexion') }}</p>
@endif

@if(session('modification-Actualite'))
<p class="alert alert-warning text-center m-auto">{{ session('modification-Actualite') }}</p>
@endif

@if(session('suppression-Actualite'))
<p class="alert alert-danger text-center m-auto">{{ session('suppression-Actualite') }}</p>
@endif

@if(session('ajout-Actualite'))
<p class="alert alert-success text-center m-auto">{{ session('ajout-Actualite') }}</p>
@endif
