@foreach ($forfaits as $forfait)
<a href="{{ url('forfait/modifier/' . $forfait->id)}}" class="">
    <div class="d-flex justify-content-between p-2">
        <div class="w-25">
            {{ $forfait->nom }}
        </div>
        <div class="w-25">
            {{ $forfait->description_limiter }}
        </div>
        <div class="w-25">
            {{ $forfait->prix }}
        </div>
    </div>
</a>
@endforeach
