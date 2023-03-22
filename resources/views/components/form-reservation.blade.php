@props(['reservations'])

<main class="pb-3 ps-4 mx-auto mt-4" id="reservation">
    <h1>Forfaits:</h1>
    <li class="nav-item dropdown include-forfait btn-group" style="width: 43rem;">
        <button class="btn btn-light dropdown-toggle include" data-bs-toggle="dropdown" aria-expanded="false">
        Voir mes achats
        </button>
        <ul class="dropdown-menu dropdown-menu-light" style="width: 100%; text-align:center; background-color:">
            @foreach ($reservations as $reservation)
                <p style="background-color: rgb(32, 124, 116);">
                    {{ $reservation->forfait->nom }} <br>
                    Quantité :
                    {{ $reservation->qty }} <br>
                    Date d'arrivée :
                    {{ $reservation->forfait->date_arrivee }} <br>
                    Date départ :
                    {{ $reservation->forfait->date_depart }} <br>
                    <form method="POST" action="{{ route('reservation.delete', $reservation->id) }}">
                        @csrf
                        <input name="_method" type="hidden" value="DELETE">
                        <button type="submit" class="btn-supprimer show_confirm" data-toggle="tooltip" title='Delete'>Supprimer</button>
                    </form>
                </p>
            @endforeach
        </ul>
    </li>
    <div class="products">
        <!-- Répétition -->
        <div
        v-for="produit of produits"
        @click="ajouterProduit(produit)"
        :class="{actif: false}">
        <ul class="list-group list-group-flush">
            <li class="list-group-item list-reservation">
                @{{ produit.nom }} @{{produit.prix}}
                <p class="btn btn-dark" style="float: right; margin-top: 2%">+</p>
                <p>Du @{{ produit.date_arrivee }} Au @{{ produit.date_depart }}</p>
            </li>
        </ul>
            <div
                class="remove"
                v-show="panier[produit.id]"
                @click.stop="enleverProduit(produit)">
            </div>
        </div>
    </div>
    <div class="ms-2 btn btn-outline-light" @click="panier_est_ouvert = true">Voir mon panier 🛒</div>
</main>
