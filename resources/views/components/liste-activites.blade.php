@foreach ($activites as $activite)

<div class="d-flex justify-content-between p-2">
    <div class="">
         {{ $activite->nom }}
    </div>

    <div class="">
        {{ $activite->description_limiter }}
    </div>

    <div class="">

        <a href="{{ url('activites/modifier/' . $activite->id)}}" class="">Modifier</a>

        <a href="{{ url('activites/supprimer/' . $activite->id)}}" class="">Supprimer</a>
    </div>

</div>

@endforeach
