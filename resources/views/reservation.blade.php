<x-layout>
    <x-nav/>
    <div id="app" v-cloak>
       <h2 id="alex">Réservation</h2>
        {{-- Formulaire de réservation --}}
        <img src="images/pneus.png" alt="" class="image-tire1">
        <img src="images/pneus.png" alt="" class="image-tire2">
        <form style="" class="pb-3 ps-4 mx-auto mt-4">
            <div class="row mb-3 pt-5">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Forfait</label>
              <div class="col-sm-10">
                <select name=""class="form-control" id="" style="width: 80%;"></select>
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputPassword3" class="col-sm-2 col-form-label">Dates</label>
              <div class="col-sm-10">
                <select name=""class="form-control" id="" style="width: 80%;"></select>
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputPassword3" class="col-sm-2 col-form-label">Quantité</label>
              <div class="col-sm-10">
                <input type="number" min="0" max="8"  name="" class="form-control" id="" style="width: 50%;"/>
              </div>
            </div>

            <div class="row mb-3">
              <div class="col-sm-10">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="gridCheck1">
                  <label class="form-check-label" for="gridCheck1">
                    Je comprends qu'aucun forfait ne sera remboursé après l'achat.
                  </label>
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-primary" style="background-color: #239A94">Ajouter au panier</button>
            <div class="ms-2 btn btn-outline-dark" @click="panier_est_ouvert = true">Voir mon panier 🛒</div>
          </form>
        {{-- PANIER --}}
       {{-- <div id="cart-toggle-bt" @click="panier_est_ouvert = true">🛒</div> --}}
       <!-- La classe "open" permet d'ouvrir le panneau -->
       <div id="cart-panel" :class="{open: panier_est_ouvert}">
           <h2 id="cart-title">Panier</h2>

           <div class="items">
               {{-- <div class="item" @click="enleverProduit(getProduit(id))" v-for="(qty, id) in panier">
                   <div class="remove">x</div>
                   <div class="name">{{ getProduit(id).name }} {{ getProduit(id).price.toFixed(2) }}$</div>
                   <div class="quantity"><input type="number" min="1" v-model="panier[id]"></div>
                   <div class="price">{{ (getProduit(id).price * qty).toFixed(2) }}</div>
               </div> --}}

               {{-- <div class="item total">
                   <div class="name">Total</div>
                   <div class="price">{{ (getPanierTotal()).toFixed(2) }}$</div>
                   <div class="price">{{ (getPanierTotal() * 1.149).toFixed(2) }}$</div>
               </div> --}}
           </div>


           <!-- Set up a container element for the button -->
           <div id="paypal-button-container"></div>
           <hr>
           <div class="empty-bt btn btn-danger ms-2" @click="viderPanier()">
            Vider le panier
            </div>
           <div class="bt-close close-cart btn btn-dark ms-3" @click="panier_est_ouvert = false">
                Fermer le panier
            </div>

           <!-- Visible s'il n'y a aucun produits -->
           <div class="vide">
               <h3 v-if="message_final == true">Merci d'avoir magasiné chez nous !</h3>
           </div>
       </div>
   </div>

    </div>
    <script src="https://www.paypal.com/sdk/js?client-id=Ab1B6QPVTldsAdp5TMypbJ33_GcAhBwCMN3ky3hZKiv6m9MUZ7D3A0c2XydAQTfKtZRsavmoPEMbugO6&currency=CAD"></script>
    <script src="js/main.js" type="module"></script>
</x-layout>
