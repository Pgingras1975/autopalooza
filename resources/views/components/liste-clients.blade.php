@foreach ($clients as $client)

    <tr>
        <td>{{ $client->nom }}</td>
        <td>{{ $client->prenom }}</td>
        <td>{{ $client->email }}</td>
        <td><a href="{{ url('client/modifier/' . $client->id)}}" class="">✎</a></td>
    </tr>

@endforeach
