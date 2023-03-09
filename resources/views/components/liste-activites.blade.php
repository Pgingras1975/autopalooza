@foreach ($activites as $activite)

<div class="d-flex justify-content-between p-2">
    <div class="w-25">
         {{ $activite->nom }}
    </div>

    <div class="w-50">
        {{ $activite->description_limiter }}
    </div>

    <div class="">

        <a href="{{ url('activites/modifier/' . $activite->id)}}" class="">Modifier</a>

        <a href="{{ url('activites/supprimer/' . $activite->id)}}" class="">Supprimer</a>
    </div>

</div>

@endforeach
