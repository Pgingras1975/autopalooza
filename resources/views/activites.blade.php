<x-layout>
    <x-nav/>

    <main id="activites">
        <h1 class="activites-h1">Activités</h1>

        <div class="row w-75 m-auto">
            <div class="col-2">
              <div id="list" class="list-group">
                @foreach ($activites as $activite)
                    <a class="list-group-item list-group-item-action" href="#list-item-{{ $activite->id }}">
                        {{ $activite->nom }}
                    </a>
                @endforeach
              </div>
            </div>
            <div class="col-10">
              <div data-bs-spy="scroll" data-bs-target="#list" data-bs-offset="0" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
                @foreach ($activites as $activite)
                    <div class="activite">
                        <img src="{{ $activite->image }}" alt="">
                        <h4 id="list-item-{{ $activite->id }}">{{ $activite->nom }}</h4>
                        <p>{{ $activite->description }}</p>
                    </div>
                @endforeach
              </div>
            </div>
        </div>
        {{-- <div class="row w-75 m-auto">
            <div class="col-2">
              <div id="list-example" class="list-group">
                <a class="list-group-item list-group-item-action" href="#1">VÉHICULES EN VEDETTE</a>
                <a class="list-group-item list-group-item-action" href="#2">ACTIVITÉS FAMILIALES</a>
                <a class="list-group-item list-group-item-action" href="#3">RENCONTREZ DES COUREURS AUTOMOBILES</a>
                <a class="list-group-item list-group-item-action" href="#4">SPECTACLES DE MUSIQUE</a>
              </div>
            </div>
            <div class="col-10">
              <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
                <div class="activite">
                    <h4 id="1">VÉHICULES EN VEDETTE</h4>
                    <img src="/images/thematique1.jpg" alt="">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                </div>
                <div class="activite">
                    <h4 id="2">ACTIVITÉS FAMILIALES</h4>
                    <img src="/images/thematique2.jpg" alt="" width="200">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                </div>
                <div class="activite">
                    <h4 id="3">RENCONTREZ DES COUREURS AUTOMOBILES</h4>
                    <img src="/images/thematique3.jpg" alt="" width="200">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                </div>
                <div class="activite">
                    <h4 id="4">SPECTACLES DE MUSIQUE</h4>
                    <img src="/images/spectacle.jpg" alt="">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                </div>
              </div>
            </div>
          </div> --}}


          <div class="activity">
              <div class="container">
                  {{-- <div class="row"> --}}
                    <div class="col">
                      @foreach ($activites as $activite)
                          <div class="item">
                              <h4>{{ $activite->nom }}</h4>
                              <img src="{{ $activite->image }}" alt="">
                              <p>{{ $activite->description }}</p>
                          </div>
                      @endforeach
                    {{-- </div> --}}
                  </div>
                </div>
          </div>

    </main>


    <x-footer/>

</x-layout>
