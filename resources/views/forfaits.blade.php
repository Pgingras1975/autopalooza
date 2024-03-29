<x-layout>
    <x-slot name="titre">Forfaits Autopalooza</x-slot>
    <x-nav/>
    <img src="images/route_background.png" alt="" class="route">
        <h2 id="alex">Forfaits</h2>
        <div class="d-flex flex-wrap container-fluid row">
            @foreach ($forfaits as $forfait)
            <div class="col-12 col-md-6 col-lg-4 cards">
                <div class="card card-forfait mx-auto d-flex mt-5 p-0">
                    <img class="card-img-top" src={{ $forfait->image }} alt="Image pour forfait {{ $forfait->nom }}" style="max-width: 100vw">
                    <div class="card-body">
                    <h4 class="card-title name-forfait">{{ $forfait->nom }}</h4>
                    <p class="card-text">À partir de</p>
                    <h5 class="card-title price-forfait">{{ $forfait->prix }}</h5>
                    <li class="nav-item dropdown include-forfait btn-group" style="width: 20rem;">
                        <button class="btn btn-light dropdown-toggle include" data-bs-toggle="dropdown" aria-expanded="false">
                        INCLUS
                        </button>
                        <ul class="dropdown-menu dropdown-menu-light">
                        <p>{{ $forfait->description }}</p>
                        </ul>
                    </li>
                    <a href="{{ url('/reservation/') }}" class="btn btn-primary btn-reserver">Réserver</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <p class="note-forfaits"></p>
    <x-footer/>
</x-layout>
