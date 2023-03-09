@foreach ($forfaits as $forfait)

<div class="d-flex justify-content-between p-2">
    <div class="">
         {{ $forfait->nom }}
    </div>

    <div class="">
        {{ $forfait->description_limiter }}
    </div>
    <div class="">
        {{ $forfait->prix }}
    </div>

    <div class="">

        <a href="{{ url('forfaits/modifier/' . $forfait->id)}}" class="">Modifier</a>

        <a href="{{ url('forfaits/supprimer/' . $forfait->id)}}" class="">Supprimer</a>
    </div>

</div>

@endforeach
