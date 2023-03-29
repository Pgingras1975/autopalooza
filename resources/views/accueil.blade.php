<x-layout-accueil>

    <x-message-confirmation />

    <x-connexion-message />

    <x-nav />

    <header>
        <div class="video-container">
            <h1>Festival AutoPalooza</h1>
            <h2>Du 4 au 6 août 2023</h2>
            <video autoplay muted loop>
                <source src="/video/pw2_header_video.mp4" type="video/mp4">
            </video>
        </div>

        <div class="route-vertical"></div>

        <div class="route-vertical-centre">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>

        <div class="voiture-rouge">
            <img src="/images/voiture_rouge.png" alt="Voiture rouge">
        </div>


        <div class="fleche-defilement">
            <a href="#anchor">
                <img src="/images/fleche.png" alt="Flèche pour défiler vers la section actualités" width="50">
            </a>
        </div>
    </header>

    <main id="accueil">
        {{-- <div class="route"></div> --}}
        <h2 id="anchor">Actualités</h2>
        <div class="row actualites m-auto">
            @foreach ($actualites as $actualite)
                <div class="actualite">
                    <div class="bordure">
                        <div class="card">
                            <img class="card-img-top" src="{{ $actualite->image }}" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text date-actualite">{{ $actualite->date_formatte }}</p>
                                <h3 class="titre-actualite">{{ $actualite->titre }}</h3>
                                <p class="description-actualite">{{ $actualite->description }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <h2 class="thematiques-h2">Nos thématiques</h2>
        <div class="row thematiques mx-auto">
            @foreach ($thematiques as $thematique)
                <div class="col-md-4 col-lg-4 col-xl-4">
                    <div class="card">
                        <img src="{{ $thematique->image }}" class="card-img" alt="...">
                        <div class="card-img-overlay text-white overlay-dark">
                            <h3 class="d-flex justify-content-center align-items-center">{{ mb_strtoupper($thematique->titre) }}</h3>
                            <a href="{{ url('/activites') }}">En savoir plus</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </main>

    <x-footer />

</x-layout-accueil>
