@foreach ($activites as $activite)
<tr>
    <td>{{ $activite->nom }}</td>
    <td>{{ $activite->description_limiter}}</td>
    <td><a href="{{ url('activite/modifier/' . $activite->id)}}" class="">✎</a></td>
</tr>
@endforeach
