@forelse ($reservations as $reservation)
    <tr>
        <td>{{ $reservation->nom }}</td>
        <td>{{ $reservation->prenom }}</td>
        <td>{{ $reservation->qty }}</td>
        <td>{{ $reservation->date_arrivee }}</td>
        <td>{{ $reservation->date_arrivee }}</td>
        <td><a href="{{ url('reservation/supprimer/' . $reservation->id)}}" class="">🗑</a></td>
    </tr>
@empty
    <p>Aucune réservation à afficher</p>
@endforelse
