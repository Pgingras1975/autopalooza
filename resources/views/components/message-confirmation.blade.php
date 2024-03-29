{{-- Actualité --}}
@if(session('modification-Actualite'))
<p class="alert alert-success text-center m-auto">{{ session('modification-Actualite') }}</p>
@endif

@if(session('suppression-Actualite'))
<p class="alert alert-success text-center m-auto">{{ session('suppression-Actualite') }}</p>
@endif

@if(session('ajout-Actualite'))
<p class="alert alert-success text-center m-auto">{{ session('ajout-Actualite') }}</p>
@endif

{{-- Activité --}}
@if(session('modification-Activite'))
<p class="alert alert-success text-center m-auto">{{ session('modification-Activite') }}</p>
@endif

@if(session('suppression-Activite'))
<p class="alert alert-success text-center m-auto">{{ session('suppression-Activite') }}</p>
@endif

@if(session('ajout-Activite'))
<p class="alert alert-success text-center m-auto">{{ session('ajout-Activite') }}</p>
@endif

{{-- Forfait --}}
@if(session('modification-Forfait'))
<p class="alert alert-success text-center m-auto">{{ session('modification-Forfait') }}</p>
@endif

@if(session('suppression-Forfait'))
<p class="alert alert-success text-center m-auto">{{ session('suppression-Forfait') }}</p>
@endif

@if(session('suppression-Forfait-Erreur'))
<p class="alert alert-warning text-center m-auto">{{ session('suppression-Forfait-Erreur') }}</p>
@endif

@if(session('ajout-Forfait'))
<p class="alert alert-success text-center m-auto">{{ session('ajout-Forfait') }}</p>
@endif

{{-- Réservation --}}
@if(session('suppression-Reservation'))
<p class="alert alert-success text-center m-auto">{{ session('suppression-Reservation') }}</p>
@endif

{{-- Employé --}}
@if(session('modification-Employe'))
<p class="alert alert-success text-center m-auto">{{ session('modification-Employe') }}</p>
@endif

@if(session('suppression-Employe'))
<p class="alert alert-success text-center m-auto">{{ session('suppression-Employe') }}</p>
@endif

@if(session('ajout-Employe'))
<p class="alert alert-success text-center m-auto">{{ session('ajout-Employe') }}</p>
@endif

@if(session('modification-Pwd'))
<p class="alert alert-success text-center m-auto">{{ session('modification-Pwd') }}</p>
@endif

{{-- Client --}}
@if(session('modification-Client'))
<p class="alert alert-success text-center m-auto">{{ session('modification-Client') }}</p>
@endif

@if(session('suppression-Client'))
<p class="alert alert-success text-center m-auto">{{ session('suppression-Client') }}</p>
@endif

@if(session('suppression-Client-Erreur'))
<p class="alert alert-warning text-center m-auto">{{ session('suppression-Client-Erreur') }}</p>
@endif

@if(session('success-Creation'))
<p class="alert alert-success text-center m-auto">{{ session('success-Creation') }}</p>
@endif

