<x-dashboard-layout>

    <x-connexion-message />

        <h1>Dashboard</h1> Bonjour {{ $auth_user }}

         <div class="p-3 d-flex">
            <a href="{{ url('/deconnexion') }}" class="btn btn-primary">Déconnexion</a>
            <a href="{{ route('creer-actualite') }}" class="btn btn-primary">Ajouter Actualité</a>
            <a href="{{ route('creer-activite') }}" class="btn btn-primary">Ajouter Activité</a>
            <a href="{{ route('creer-forfait') }}" class="btn btn-primary">Ajouter Forfait</a>

            @if ($authuserid == 1)
                <a href="{{ route('creer-employe') }}" class="btn btn-primary">Ajouter Employé</a>
            @endif
        </div>

            @if ($authuserid == 1)
                <div class="d-flex">
                    <div class="w-100 border h-200">
                        <h2>Liste des employé</h2>
                        <div class="d-flex">
                            <h5 class="w-25">Nom</h5>
                            <h5 class="w-25">id</h5>
                            <h5 class="w-50">E-mail</h5>
                        </div>
                        <x-liste-employes :employes="$employes" :authuserid="$authuserid"/>
                    </div>
                </div>
            @endif

        <div class="d-flex">
            <div class="w-50 border h-400">
                <h2>Liste des clients
                    <form action="/client/rechercher" method="get">
                        <input type="text" name="search">
                        <input class="btn btn-danger" type="submit" value="Rechercher">
                    </form>

                </h2>
                <div class="d-flex">
                    <h5 class="w-25">Nom</h5>
                    <h5 class="w-25">id</h5>
                    <h5 class="w-50">E-mail</h5>
                </div>
                <x-liste-clients :clients="$clients"/>
            </div>

            <div class="w-50 border h-400">
                <h2>Réservations
                    <form action="/reservation/rechercher" method="get">
                        <input type="text" name="search">
                        <input class="btn btn-danger" type="submit" value="Rechercher">
                    </form>

                </h2>
                <div class="d-flex">
                    <h5 class="w-25">Nom</h5>
                    <h5 class="w-25">Qty</h5>
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
                    <h5 class="w-25">Titre</h5>
                    <h5 class="w-25">Description</h5>
                </div>
                <x-liste-actualites :actualites="$actualites"/>
            </div>

            <div class="w-33 border">
                <h2>Activités</h2>
                <div class="d-flex">
                    <h5 class="w-50">Nom</h5>
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

</x-dashboard-layout>
