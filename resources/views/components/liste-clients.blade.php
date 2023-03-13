@foreach ($clients as $client)
@if ($authuserid == 1)
<a href="{{ url('client/modifier/' . $client->id)}}" class="">
@endif
    <div class="d-flex p-2">
        <div class="w-25">
            {{ $client->nom_complet }}
        </div>
        <div class="w-25">
            {{ $client->id }}
        </div>

        <div class="w-50">
            {{ $client->email }}
        </div>

        <div class="">
            {{ $client->type }}
        </div>
    </div>
@if ($authuserid == 1)
</a>
@endif

@endforeach
