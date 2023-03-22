@forelse ($clients as $client)
    <tr>
        <td><a href="{{ url('client/modifier/' . $client->id)}}" class="">{{ $client->nom }}</a></td>
        <td><a href="{{ url('client/modifier/' . $client->id)}}" class="">{{ $client->prenom }}</a></td>
        <td><a href="{{ url('client/modifier/' . $client->id)}}" class="">{{ $client->email }}</a></td>
        {{-- <td><a href="{{ url('client/modifier/' . $client->id)}}" class="">✎</a></td> --}}
    </tr>
@empty
    <p class="empty">Aucun client trouvé au nom de "{{$search}}"</p>
@endforelse
