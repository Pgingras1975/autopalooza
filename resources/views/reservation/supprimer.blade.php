<x-dashboard-layout>

    <x-nav-dashboard :authuser="$authuser" :authuserid="$authuserid"/>

    <div class="wrapper">

        <div class="row">
        <div class="padding-top-form"></div>
            <div class="col-lg-2">

            </div>

            <div class="col-lg-8">
                <div class="panel panel-primary">
                    <div class="panel-heading entete header-form-h" style="background-color:#e71d36">
                        <p class="header-form-fs"><i class="fa fa-bar-chart-o fa-fw"></i>Réservation

                        </p>
                    </div>

                    <div class="panel-body form-h">
                        <div class="container">
                            <div class="row">
                                <div class="col-25">
                                    <label class="label-fs" for="nom">Client</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" id="nom" name="nom" value="{{ $reservation->prenom }} {{ $reservation->nom_de_famille }}">
                                    <x-form-message champ="nom" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-25">
                                    <label class="label-fs" for="nom">Forfait:</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" id="nom" name="nom" value="{{ $reservation->nom_du_forfait }}">
                                    <x-form-message champ="nom" />
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label class="label-fs"for="qty">Quantité:</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" id="qty" name="qty" value="{{ $reservation->qty }}">
                                    <x-form-message champ="qty" />
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label class="label-fs"for="date_arrivee">Arrivée:</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" id="date_arrivee" name="date_arrivee" value="{{ $reservation->date_arrivee }}">
                                    <x-form-message champ="date_arrivee" />
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label class="label-fs"for="date_depart">Départ:</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" id="date_depart" name="date_depart" value="{{ $reservation->date_depart }}">
                                    <x-form-message champ="date_depart" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="btn-position">
                                    <form method="POST" action="{{ route('reservation.delete', $reservation->id) }}">
                                        @csrf
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button type="submit" class="btn-supprimer show_confirm" data-toggle="tooltip" title='Delete'>Supprimer</button>
                                        <a class="btn-annuler" href="{{ route('admin') }}">Annuler</a>
                                    </form>
                                </div>
                            </div>


                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.panel-body -->
                <div>
                <!-- /.panel-primary -->
            <div>
        <div>
    </div>

</x-dashboard-layout>
