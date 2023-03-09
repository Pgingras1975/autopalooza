@foreach ($reservations as $reservation)

<div class="d-flex justify-content-between p-2">
    <div class="">
         {{ $reservation->user->nom_complet }}
    </div>

    <div class="">
        {{ $reservation->date_arrivee }}
    </div>
    <div class="">
        {{ $reservation->date_depart }}
    </div>

    <div class="">

        <a href="{{ url('reservations/modifier/' . $reservation->id)}}" class="">Modifier</a>

        <a href="{{ url('reservations/supprimer/' . $reservation->id)}}" class="">Supprimer</a>
    </div>

</div>




@endforeach
