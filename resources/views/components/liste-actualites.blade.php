@foreach ($actualites as $actualite)

<div class="d-flex justify-content-between p-2">
    <div class="w-25">
         {{ $actualite->titre }}
    </div>

    <div class="w-50">
        {{ $actualite->description_limiter }}
    </div>

    <div class="w-25">
        <img src="{{$actualite->image}}" alt="" height="25">
    </div>
    <div class="">

        <a href="{{ url('actualite/modifier/' . $actualite->id)}}" class="">Modifier</a>

        <a href="{{ url('actualite/supprimer/' . $actualite->id)}}" class="">Supprimer</a>
    </div>

</div>

@endforeach
