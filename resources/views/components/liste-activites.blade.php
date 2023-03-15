@forelse ($activites as $activite)
<tr>
    <td><a href="{{ url('activite/modifier/' . $activite->id)}}" class="">{{ $activite->nom }}</a></td>
    <td><a href="{{ url('activite/modifier/' . $activite->id)}}" class="">{{ $activite->description_limiter}}</td>
</tr>
@empty
    <p>Aucune activité à afficher</p>
@endforelse
