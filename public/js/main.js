import { createApp, ref, onMounted } from 'https://unpkg.com/vue@3/dist/vue.esm-browser.js'

const DOMAIN = "http://127.0.0.1:8000/"
// API Récupération des forfaits
const FORFAITS_URL = DOMAIN + "api/recuperation"
// API Enregistrement de la réservation
const RESEVATION_URL = DOMAIN + "api/enregistrement"

const selected = ref(null)

const produits = ref([])
const panier_est_ouvert = ref(false)
const panier = ref({})
let message_final = ref(false)



// Récupérer les forfaits
function recupererProduits(){
    fetch(FORFAITS_URL).then(resp => resp.json()).then(result => {
        produits.value = result
    })
}
recupererProduits()



/***************************** */

function ajouterProduit(produit){
    // Changer panier
    if(panier.value[produit.id] == undefined){
        panier.value[produit.id] = 1
    }else{
     panier.value[produit.id] += 1
    }
    console.log(panier.value)
}

function enleverProduit(produit){
    delete panier.value[produit.id]
}

function viderPanier(){
    panier.value = {}
}



function getProduit(id){
    for(let produit of produits.value){
        if(produit.id == id){
            return produit
        }
    }
}

function getPanierTotal(){
    let somme = 0
    // panier_est_ouvert.value = true
    for(let id in panier.value){
        let price = getProduit(id).prix
        let qty = panier.value[id]
        somme += parseFloat(price) * qty
    }
    return somme
}

function message(){
    message_final.value = true
}

createApp({
    setup() {
        onMounted(function(){
            paypal.Buttons({
                // Sets up the transaction when a payment button is clicked
                createOrder: (data, actions) => {
                  return actions.order.create({
                    purchase_units: [{
                      amount: {
                        value: getPanierTotal() // Can also reference a variable or function
                      }
                    }]
                  });
                },
                // Finalize the transaction after payer approval
                onApprove: (data, actions) => {
                  return actions.order.capture().then(function(orderData) {
                    viderPanier()
                    message()

                  });
                }
              }).render('#paypal-button-container');
        })

        return {
            produits,
            panier_est_ouvert,
            panier,
            message_final,
            selected,

            ajouterProduit,
            enleverProduit,
            viderPanier,
            getProduit,
            getPanierTotal,
        }
    }
}).mount("#app")
