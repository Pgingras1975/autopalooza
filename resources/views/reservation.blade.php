<x-layout>
    <x-slot name="titre">Réservation Autopalooza</x-slot>
    <x-message-confirmation />
    <x-nav/>
    <div id="app" v-cloak>
       <h2 id="alex">Réservation</h2>
        <img src="images/pneus.png" alt="" class="image-tire1">
        <img src="images/pneus.png" alt="" class="image-tire2">
        {{-- Formulaire de réservation --}}
        <x-form-reservation :reservations="$reservations"/>
        {{-- Panier --}}
        <x-panier :panier/>
    </div>
    {{-- Paypal --}}
    <script src="https://www.paypal.com/sdk/js?client-id=AekvYHTjYcP0vlJMAdJCTy2j5eZ_aWMb6xBtq083jFMRmE6KdEpi7FvIPrff_m5gbKmgN3-gzg4OGk1z&currency=CAD"></script>
    {{-- Javascript --}}
    <script src="js/reservation.js" type="module"></script>
    <x-footer id="nav-reservation"/>
</x-layout>
