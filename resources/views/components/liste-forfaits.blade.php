@forelse ($forfaits as $forfait)

<tr>
    <td><a href="{{ url('forfait/modifier/' . $forfait->id)}}" class="">{{ $forfait->nom }}</a></td>
    <td><a href="{{ url('forfait/modifier/' . $forfait->id)}}" class="">{{ $forfait->description_limiter }}</a></td>
    <td><a href="{{ url('forfait/modifier/' . $forfait->id)}}" class="">{{ $forfait->prix }}</a></td>
</tr>
@empty
    <p class="empty">Aucun forfait à afficher</p>
@endforelse
