@props(['panier'])

<div id="pannel-off">
    <div id="cart-panel" :class="{open: panier_est_ouvert}">
        <h2 id="cart-title">Panier</h2>
        <div class="items">
            <div class="item" @click="enleverProduit(getProduit(id))" v-for="(qty, id) in panier">
                <div class="remove">x</div>
                    <div class="name" name="nom">@{{ getProduit(id).nom }}</div>
                    <div class="name" name="prix">@{{ getProduit(id).prix }}</div>
                    <div class="name" name="date_arrivee">Du @{{ getProduit(id).date_arrivee }}</div>
                    <div class="name" name="date_depart">Au @{{ getProduit(id).date_depart }}</div>
                    <div class="quantity ms-5" name="qty">x@{{qty}}</div>
                    <div class="price me-2">@{{ (parseFloat(getProduit(id).prix)*qty).toFixed(2) }}$</div>
            </div>
        </div>
        <div class="name price1">Total : @{{ (getPanierTotal()).toFixed(2) }} $</div>
        <div class="price2">Total avec taxes : @{{ (getPanierTotal()* 1.149).toFixed(2) }} $</div>

        <div id="paypal-button-container"></div>

        <div class="vide">
            <h3 v-if="message_final == true">Merci d'avoir magasiné chez nous !</h3>
        </div>
        <div class="empty-bt btn btn-outline-secondary btn-sm me-1" @click="viderPanier()">Vider mon panier</div>
        <div class="bt-close btn btn-dark btn-sm ms-1" @click="panier_est_ouvert = false">Fermer mon panier</div>
    </div>
</div>
</div>
