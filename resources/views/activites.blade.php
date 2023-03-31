<x-layout>
    <x-slot name="titre">Activités Autopalooza</x-slot>

    <x-nav />

    <main id="activites">

        <h1 class="activites-h1">Nos activités</h1>

        <h2 class="w-50 text-center m-auto">Rejoignez-nous pour une fin de semaine inoubliable remplie d'adrénaline et de
            musique entraînante au festival d'autos et de musique - l'endroit parfait pour se divertir en famille et
            entre amis !
        </h2>

        <div class="container m-auto">
            <div class="row">
                <div class="col-5 gauche">
                    @foreach ($activites as $activite)
                        @if ($loop->iteration % 2 != 0)
                            <div class="background-activite slide-gauche">
                                <div class="impair">
                                    <img src="{{ $activite->image }}" alt="{{ $activite->nom }}">
                                    <div class="texte">
                                        <h3><strong>{{ mb_strtoupper($activite->nom) }}</strong></h3>
                                        <p>{{ $activite->description }}</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="col-5 droite">
                    @foreach ($activites as $activite)
                        @if ($loop->iteration % 2 == 0)
                            <div class="background-activite slide-droite">
                                <div class="pair">
                                    <div class="texte">
                                        <h3><strong>{{ mb_strtoupper($activite->nom) }}</strong></h3>
                                        <p>{{ $activite->description }}</p>
                                    </div>
                                    <img src="{{ $activite->image }}" alt="{{ $activite->nom }}">
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>

    </main>

    <x-footer />

    <script src="js/activites.js"></script>

</x-layout>
