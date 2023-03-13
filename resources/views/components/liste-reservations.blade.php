@foreach ($reservations as $reservation)

<div class="d-flex justify-content-between p-2">
    <div class="w-25">
        {{ $reservation->nom_complet }}
    </div>
    <div class="">
        {{ $reservation->qty }}
   </div>
    <div class="">
        {{ $reservation->date_arrivee }}
    </div>
    <div class="">
        {{ $reservation->date_depart }}
    </div>

    <div class="">

        <a href="{{ url('reservation/supprimer/' . $reservation->id)}}" class="">Supprimer</a>
    </div>

</div>

@endforeach
