<x-layout>
    <x-nav/>
    <div id="app" v-cloak>
       <h2 id="alex">Réservation</h2>

        <img src="images/pneus.png" alt="" class="image-tire1">
        <img src="images/pneus.png" alt="" class="image-tire2">
        {{-- Formulaire de réservation --}}
            <main class="pb-3 ps-4 mx-auto mt-4">
                <h1>Forfaits:</h1>
                <div class="products">
                    <!-- Répétition -->
                    <div
                    v-for="produit of produits"
                    @click="ajouterProduit(produit)"
                    :class="{actif: false}">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item list-reservation">@{{ produit.nom }} @{{produit.prix}} +</li>
                    </ul>
                        <!-- "remove" est visible juste si le produit est dans le panier -->
                        <div
                            class="remove"
                            v-show="panier[produit.id]"
                            @click.stop="enleverProduit(produit)"></div>
                        </div>
                </div>
                <div class="ms-2 btn btn-outline-light" @click="panier_est_ouvert = true">Voir mon panier 🛒</div>
            </main>

            <!-- La classe "open" permet d'ouvrir le panneau -->
            <div id="pannel-off">
            <div id="cart-panel" :class="{open: panier_est_ouvert}">
                <h2 id="cart-title">Panier</h2>
                <div class="items">
                    <div class="item" @click="enleverProduit(getProduit(id))" v-for="(qty, id) in panier">
                        <div class="remove">x</div>
                        <div class="name">@{{ getProduit(id).nom }} @{{ getProduit(id).prix }}</div>
                        <div class="quantity"><input type="number" min="1" v-model="panier[id]"></div>
                        <div class="price me-5">@{{ parseFloat(getProduit(id).prix)*qty.toFixed(2) }}$</div>
                    </div>
                </div>
                <div class="item total"><br>
                    <div class="name">Total : </div>
                    <div class="price">@{{ (getPanierTotal()).toFixed(2) }}</div>
                    <div>Total avec taxes :</div>
                    <div class="price">@{{ (getPanierTotal()* 1.149) .toFixed(2) }}</div>
                </div>
                <!-- Replace "test" with your own sandbox Business account app client ID -->

                <!-- Set up a container element for the button -->
                <div id="paypal-button-container"></div>
                <!-- Visible s'il n'y a aucun produits -->
                <div class="vide">
                    <h3 v-if="message_final == true">Merci d'avoir magasiné chez nous !</h3>
                </div>
                <div class="empty-bt btn btn-outline-secondary btn-sm me-1" @click="viderPanier()">Vider mon panier</div>
                <div class="bt-close btn btn-dark btn-sm ms-1" @click="panier_est_ouvert = false">Fermer mon panier</div>
            </div>
        </div>
           <!-- Visible s'il n'y a aucun produits -->
           <div class="vide">
               <h3 v-if="message_final == true">Merci d'avoir magasiné chez nous !</h3>
           </div>
       </div>
   </div>
</div>
    </div>
    <script src="https://www.paypal.com/sdk/js?client-id=AekvYHTjYcP0vlJMAdJCTy2j5eZ_aWMb6xBtq083jFMRmE6KdEpi7FvIPrff_m5gbKmgN3-gzg4OGk1z&currency=CAD"></script>
    <script src="js/main.js" type="module"></script>
</x-layout>
