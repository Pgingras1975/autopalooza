@foreach ($usagers as $usager)

<div class="d-flex justify-content-between p-2">
    <div class="">
         {{ $usager->nom_complet }}
    </div>

    <div class="">
        {{ $usager->email }}
    </div>

    <div class="">
        {{ $usager->type }}
    </div>

    <div class="">
        {{-- <a href="{{ url('faits/modifier/' . $usager->id)}}" class="btn btn-secondary">Modifier</a>

        <a href="{{ url('faits/supprimer/' . $usager->id)}}" class="btn btn-danger">Supprimer</a> --}}

        <a href="{{ url('usagers/modifier/' . $usager->id)}}" class="">Modifier</a>

        <a href="{{ url('usagers/supprimer/' . $usager->id)}}" class="">Supprimer</a>
    </div>

</div>


@endforeach
