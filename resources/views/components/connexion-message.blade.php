{{-- Connexion --}}
@if(session('echec-connexion'))
<p class="alert alert-danger text-center m-auto">{{ session('echec-connexion') }}</p>
@endif

@if(session('success-deconnexion'))
<p class="alert alert-danger text-center m-auto">{{ session('success-deconnexion') }}</p>
@endif
