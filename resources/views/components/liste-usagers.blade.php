@foreach ($usagers as $usager)
@if ($id == 1)
<a href="{{ url('employe/modifier/' . $usager->id)}}" class="">
@endif
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
    </div>
@if ($id == 1)
</a>
@endif

@endforeach
