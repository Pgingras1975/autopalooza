{{-- Connexion --}}
@if(session('echec-Connexion'))
<p class="alert alert-danger text-center m-auto">{{ session('echec-Connexion') }}</p>
@endif

@if(session('success-Deconnexion'))
<p class="alert alert-success text-center m-auto">{{ session('success-Deconnexion') }}</p>
@endif
