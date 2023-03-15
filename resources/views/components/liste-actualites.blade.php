@forelse ($actualites as $actualite)

<tr>
    <td><a href="{{ url('actualite/modifier/' . $actualite->id)}}" class="">{{ $actualite->titre }}</a></td>
    <td><a href="{{ url('actualite/modifier/' . $actualite->id)}}" class="">{{ $actualite->description_limiter }}</a></td>
</tr>
@empty
    <p>Aucune actualité à afficher</p>
@endforelse
