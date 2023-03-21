@forelse ($reservations as $reservation)
    <tr>
        <td><a href="{{ url('reservation/modifier/' . $reservation->id)}}" class="">{{ $reservation->nom }}</a></td>
        <td><a href="{{ url('reservation/modifier/' . $reservation->id)}}" class="">{{ $reservation->prenom }}</a></td>
        <td><a href="{{ url('reservation/modifier/' . $reservation->id)}}" class="">{{ $reservation->nom_du_forfait}}</a></td>
        <td><a href="{{ url('reservation/modifier/' . $reservation->id)}}" class="">{{ $reservation->qty }}</a></td>
        <td><a href="{{ url('reservation/modifier/' . $reservation->id)}}" class="">{{ $reservation->date_arrivee }}</a></td>
        <td><a href="{{ url('reservation/modifier/' . $reservation->id)}}" class="">{{ $reservation->date_arrivee }}</a></td>
    </tr>
@empty
    <p class="empty">Aucune réservation au nom de "{{$search}}"</p>
@endforelse
