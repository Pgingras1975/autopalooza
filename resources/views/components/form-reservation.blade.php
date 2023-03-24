@props(['reservations'])

<main class="pb-3 ps-3 pe-3 mx-auto mt-4" id="reservation">
    <h1>Forfaits:</h1>
    {{-- Affichage de la liste des achats du client connecté --}}
    <li class="nav-item dropdown include-forfait btn-group d-flex flex-wrap container-fluid column"
        style="max-width: 43rem;">
        <button class="btn btn-light dropdown-toggle include container-fluid pt-3 pb-3" data-bs-toggle="dropdown"
            aria-expanded="false">
            Voir mes achats
        </button>
        <ul class="dropdown-menu dropdown-menu-light" style="width: 96%; text-align:center;">
            <h2>Mes achats</h2>
            @foreach ($reservations as $reservation)
                <h3 class="pt-3 pb-3" style="background-color: #252424; color:aliceblue;">
                    {{ $reservation->forfait->nom }}
                </h3>
                <p>
                    Quantité :
                    {{ $reservation->qty }}
                </p>
                <p>
                    Date d'arrivée :
                    {{ $reservation->forfait->date_arrivee }}
                </p>
                <p>
                    Date départ :
                    {{ $reservation->forfait->date_depart }}
                </p>
                <form method="POST" action="{{ route('reservation.delete', $reservation->id) }}">
                    @csrf
                    <input name="_method" type="hidden" value="DELETE">
                    <button type="submit" class="btn-supprimer show_confirm" data-toggle="tooltip"
                        title='Delete'>Supprimer</button>
                </form>
                </p>
            @endforeach
        </ul>
    </li>
    {{-- Affichage des forfaits pouvant être ajouté au panier --}}
    <div class="products">
        <div v-for="produit of produits" @click="ajouterProduit(produit)" :class="{ actif: false }">
            <div class="d-flex flex-wrap container-fluid column">
                <div class="col-12 cards">
                    <div class="card card-forfait mx-auto d-flex mt-5 p-0" style="max-width: 30rem;">
                        <div class="card-body">
                            <h4 class="card-title">@{{ produit.nom }}</h4>
                            <p class="card-text">Du @{{ produit.date_arrivee }} Au @{{ produit.date_depart }}</p>
                            <p class="card-text btn" style="background-color: rgb(32, 124, 116)">Ajouter au panier</p>
                        </div>
                    </div>
                    <div class="remove" v-show="panier[produit.id]" @click.stop="enleverProduit(produit)"></div>
                </div>
            </div>
        </div>
        <div class="ms-2 btn btn-outline-light mt-3" @click="panier_est_ouvert = true">Voir mon panier 🛒</div>
</main>
