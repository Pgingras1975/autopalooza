@forelse ($reservations as $reservation)
    <tr>
        <td><a href="{{ url('reservation/modifier/' . $reservation->id)}}">{{ $reservation->nom }}</a></td>
        <td><a href="{{ url('reservation/modifier/' . $reservation->id)}}">{{ $reservation->prenom }}</a></td>
        <td><a href="{{ url('reservation/modifier/' . $reservation->id)}}">{{ $reservation->nom_du_forfait}}</a></td>
        <td><a href="{{ url('reservation/modifier/' . $reservation->id)}}">{{ $reservation->qty }}</a></td>
        <td><a href="{{ url('reservation/modifier/' . $reservation->id)}}">{{ $reservation->date_arrivee }}</a></td>
        <td><a href="{{ url('reservation/modifier/' . $reservation->id)}}">{{ $reservation->date_depart }}</a></td>
    </tr>
@empty
    <p class="empty">Aucune réservation au nom de "{{$search}}"</p>
@endforelse
