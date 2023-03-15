@forelse ($clients as $client)
    <tr>
        <td><a href="{{ url('client/modifier/' . $client->id)}}" class="">{{ $client->nom }}</a></td>
        <td><a href="{{ url('client/modifier/' . $client->id)}}" class="">{{ $client->prenom }}</a></td>
        <td><a href="{{ url('client/modifier/' . $client->id)}}" class="">{{ $client->email }}</a></td>
        {{-- <td><a href="{{ url('client/modifier/' . $client->id)}}" class="">✎</a></td> --}}
    </tr>
@empty
    <p>Aucun client à afficher</p>
@endforelse
