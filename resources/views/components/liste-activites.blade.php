@foreach ($activites as $activite)
<a href="{{ url('activite/modifier/' . $activite->id)}}" class="">
    <div class="d-flex justify-content-between p-2">
        <div class="w-25">
            {{ $activite->nom }}
        </div>

        <div class="w-50">
            {{ $activite->description_limiter }}
        </div>
    </div>
</a>
@endforeach
