@foreach ($reservations as $reservation)

{{-- <div class="d-flex justify-content-between p-2">
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

        <a href="{{ url('reservation/supprimer/' . $reservation->id)}}" class="">x</a>
    </div>

</div> --}}


<tr>
    <td>{{ $reservation->nom }}</td>
    <td>{{ $reservation->prenom }}</td>
    <td>{{ $reservation->qty }}</td>
    <td>{{ $reservation->date_arrivee }}</td>
    <td>{{ $reservation->date_arrivee }}</td>
    <td><a href="{{ url('reservation/supprimer/' . $reservation->id)}}" class="">x</a></td>
</tr>
@endforeach
