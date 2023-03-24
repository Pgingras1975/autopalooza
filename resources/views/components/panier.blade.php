@props(['panier'])

<div id="pannel-off">
    <div id="cart-panel" :class="{ open: panier_est_ouvert }">
        <h2 id="cart-title" class="mt-3">Panier</h2>
        <div class="items container-fluid">
            <div class="item card mx-auto d-flex mt-2 p-0 col-12" @click="enleverProduit(getProduit(id))"
                v-for="(qty, id) in panier">
                <h4 class="name card-text" name="nom">@{{ getProduit(id).nom }}</h4>
                <div class="name card-text" name="date_arrivee">Du @{{ getProduit(id).date_arrivee }}</div>
                <div class="name card-text" name="date_depart">Au @{{ getProduit(id).date_depart }}</div>
                <div class="name card-text" name="prix">Prix unitaire: @{{ getProduit(id).prix }}</div>
                <div class="quantity card-text" name="qty">Quantité : @{{ qty }}</div>
                <div class="remove card card-text">Supprimer</div>
            </div>
        </div>
        <div class="card mt-2">Total : @{{ (getPanierTotal()).toFixed(2) }} $</div>
        <div class="card mt-2">Total avec taxes : @{{ (getPanierTotal() * 1.149).toFixed(2) }} $</div>

        <div id="paypal-button-container" class="mt-2"></div>

        <div class="vide">
            <h3 v-if="message_final == true">Merci d'avoir magasiné chez nous !</h3>
        </div>
        <div class="button-cart container-fluid">
            <div class="empty-bt btn btn-outline-secondary btn-sm me-2" @click="viderPanier()">Vider mon panier</div>
            <div class="bt-close btn btn-dark btn-sm" @click="panier_est_ouvert = false">Fermer mon panier</div>
        </div>
    </div>
</div>
</div>
