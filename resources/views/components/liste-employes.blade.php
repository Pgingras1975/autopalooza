@foreach ($employes as $employe)
@if ($authuserid == 1)
<a href="{{ url('employe/modifier/' . $employe->id)}}" class="">
@endif
    <div class="d-flex p-2">
        <div class="w-25">
            {{ $employe->nom_complet }}
        </div>
        <div class="w-25">
            {{ $employe->id }}
        </div>

        <div class="w-50">
            {{ $employe->email }}
        </div>

        <div class="">
            {{ $employe->type }}
        </div>
    </div>
@if ($authuserid == 1)
</a>
@endif

@endforeach
