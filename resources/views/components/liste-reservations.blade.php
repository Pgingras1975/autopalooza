@forelse ($reservations as $reservation)
    <tr>
        <td><a href="{{ url('reservation/modifier/' . $reservation->id)}}" class="">{{ $reservation->nom }}</a></td>
        <td>{{ $reservation->prenom }}</td>
        <td>{{ $reservation->nom_du_forfait}}</td>
        <td>{{ $reservation->qty }}</td>
        <td>{{ $reservation->date_arrivee }}</td>
        <td>{{ $reservation->date_arrivee }}</td>
        {{-- <td><a href="{{ url('reservation/supprimer/' . $reservation->id)}}" class="">🗑</a></td> --}}
        {{-- <td><a href="{{ route('reservation.delete', $reservation->id) }}" class="">🗑</a></td> --}}
    </tr>
@empty
    <p class="empty">Aucune réservation à afficher</p>
@endforelse
