@forelse ($employes as $employe)
<tr>
    <td><a href="{{ url('employe/modifier/' . $employe->id)}}" class="">{{ $employe->nom }}</a></td>
    <td><a href="{{ url('employe/modifier/' . $employe->id)}}" class="">{{ $employe->prenom }}</a></td>
    <td><a href="{{ url('employe/modifier/' . $employe->id)}}" class="">{{ $employe->email }}</a></td>
</tr>
@empty
    <p class="empty">Aucun employé à afficher</p>
@endforelse
