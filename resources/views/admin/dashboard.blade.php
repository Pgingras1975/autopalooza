<x-layout>

        <h1>Dashboard</h1>

         <div class="p-3">
            <a href="{{ url('/deconnexion') }}" class="btn btn-primary">Déconnexion</a>
        </div>
     <div class="d-flex">
        <div class="w-50 border">
            <h2>Liste des usagers du site</h2>
            <div class="d-flex">
                <h5 class="w-25">Nom</h5>
                <h5 class="w-50">E-mail</h5>
            </div>
            <x-liste-usagers :usagers="$usagers"/>
        </div>

        <div class="w-50 border">
            <h2>Réservations</h2>
            <div class="d-flex">
                <h5 class="w-25">Nom</h5>
                <h5 class="w-25">Date Arrivée</h5>
                <h5 class="w-25">Date Départ</h5>
            </div>
            <x-liste-reservations :reservations="$reservations"/>
        </div>
    </div>

    <div class="d-flex">
        <div class="w-33 border">
            <h2>Actualités</h2>
            <div class="d-flex">
                <h5 class="w-25">Description</h5>
            </div>
            <x-liste-actualites :actualites="$actualites"/>
        </div>

        <div class="w-33 border">
            <h2>Activités</h2>
            <div class="d-flex">
                <h5 class="w-25">Description</h5>
            </div>
            <x-liste-activites :activites="$activites"/>
        </div>

        <div class="w-33 border">
            <h2>Forfaits</h2>
            <div class="d-flex">
                <h5 class="w-50">Description</h5>
                <h5 class="w-25">Prix</h5>
            </div>
            <x-liste-forfaits :forfaits="$forfaits"/>
        </div>
    </div>
</x-layout>
