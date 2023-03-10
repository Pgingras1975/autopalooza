@foreach ($usagers as $usager)

<div class="d-flex p-2">
    <div class="w-25">
         {{ $usager->nom_complet }}
    </div>
    <div class="w-25">
        {{ $usager->id }}
   </div>

    <div class="w-50">
        {{ $usager->email }}
    </div>

    <div class="">
        {{ $usager->type }}
    </div>

    <div class="">
        {{-- <a href="{{ url('faits/modifier/' . $usager->id)}}" class="btn btn-secondary">Modifier</a>

        <a href="{{ url('faits/supprimer/' . $usager->id)}}" class="btn btn-danger">Supprimer</a> --}}

        @if ($id == 1)
            <a href="{{ url('usagers/modifier/' . $usager->id)}}" class="">Modifier</a>
        @endif


        {{-- <a href="{{ url('usagers/supprimer/' . $usager->id)}}" class="">Supprimer</a> --}}
    </div>

</div>


@endforeach
