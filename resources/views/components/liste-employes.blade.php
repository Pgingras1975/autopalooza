@forelse ($employes as $employe)
    <tr>
        @if ($authuserid == 1 )
            <td><a href="{{ url('employe/modifier/' . $employe->id)}}" class="">{{ $employe->nom }}</a></td>
            <td><a href="{{ url('employe/modifier/' . $employe->id)}}" class="">{{ $employe->prenom }}</a></td>
            <td><a href="{{ url('employe/modifier/' . $employe->id)}}" class="">{{ $employe->email }}</a></td>
        @else
            <td>{{ $employe->nom }}</td>
            <td>{{ $employe->prenom }}</td>
            <td>{{ $employe->email }}</td>
        @endif
    </tr>
@empty
    <p class="empty">Aucun employé à afficher</p>
@endforelse
