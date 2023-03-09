@foreach ($actualites as $actualite)

<div class="d-flex justify-content-between p-2">
    <div class="">
         {{ $actualite->titre }}
    </div>

    <div class="">
        {{ $actualite->description_limiter }}
    </div>

    <div class="">

        <a href="{{ url('actualites/modifier/' . $actualite->id)}}" class="">Modifier</a>

        <a href="{{ url('actualites/supprimer/' . $actualite->id)}}" class="">Supprimer</a>
    </div>

</div>

@endforeach
