{{-- Connexion --}}
@if(session('echec-connexion'))
<p class="alert alert-danger text-center m-auto">{{ session('echec-connexion') }}</p>
@endif

@if(session('success-deconnexion'))
<p class="alert alert-danger text-center m-auto">{{ session('success-deconnexion') }}</p>
@endif

{{-- Actualité --}}
@if(session('modification-Actualite'))
<p class="alert alert-warning text-center m-auto">{{ session('modification-Actualite') }}</p>
@endif

@if(session('suppression-Actualite'))
<p class="alert alert-danger text-center m-auto">{{ session('suppression-Actualite') }}</p>
@endif

@if(session('ajout-Actualite'))
<p class="alert alert-success text-center m-auto">{{ session('ajout-Actualite') }}</p>
@endif

{{-- Activité --}}
@if(session('modification-Activite'))
<p class="alert alert-warning text-center m-auto">{{ session('modification-Activite') }}</p>
@endif

@if(session('suppression-Activite'))
<p class="alert alert-danger text-center m-auto">{{ session('suppression-Activite') }}</p>
@endif

@if(session('ajout-Activite'))
<p class="alert alert-success text-center m-auto">{{ session('ajout-Activite') }}</p>
@endif

{{-- Forfait --}}
@if(session('modification-Forfait'))
<p class="alert alert-warning text-center m-auto">{{ session('modification-Forfait') }}</p>
@endif

@if(session('suppression-Forfait'))
<p class="alert alert-danger text-center m-auto">{{ session('suppression-Forfait') }}</p>
@endif

@if(session('suppression-erreur'))
<p class="alert alert-danger text-center m-auto">{{ session('suppression-erreur') }}</p>
@endif

@if(session('ajout-Forfait'))
<p class="alert alert-success text-center m-auto">{{ session('ajout-Forfait') }}</p>
@endif

{{-- Réservation --}}
@if(session('suppression-Reservation'))
<p class="alert alert-danger text-center m-auto">{{ session('suppression-Reservation') }}</p>
@endif

{{-- Employé --}}
@if(session('modification-Employe'))
<p class="alert alert-success text-center m-auto">{{ session('modification-Employe') }}</p>
@endif

@if(session('suppression-Employe'))
<p class="alert alert-success text-center m-auto">{{ session('suppression-Employe') }}</p>
@endif

{{-- Client --}}
@if(session('modification-Client'))
<p class="alert alert-success text-center m-auto">{{ session('modification-Client') }}</p>
@endif

@if(session('suppression-Client'))
<p class="alert alert-success text-center m-auto">{{ session('suppression-Client') }}</p>
@endif
