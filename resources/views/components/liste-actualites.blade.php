@forelse ($actualites as $actualite)

<tr>
    <td><a href="{{ url('actualite/modifier/' . $actualite->id)}}" class="">{{ $actualite->titre_limiter }}</a></td>
    <td><a href="{{ url('actualite/modifier/' . $actualite->id)}}" class="">{{ $actualite->description_limiter }}</a></td>
</tr>
@empty
    <p class="empty">Aucune actualité à afficher</p>
@endforelse
