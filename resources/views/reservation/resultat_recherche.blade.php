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
                        <p class="header-form-search-fs"><i class="fa fa-bar-chart-o fa-fw"></i>Résulat recherche réservations</p>
                        <a class="btn-retour" href="{{ route('admin') }}">Retour</a>
                    </div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive h-300">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>Nom</th>
                                                <th>Prénom</th>
                                                <th>Forfait</th>
                                                <th>Qté</th>
                                                <th>Arrivé</th>
                                                <th>Départ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <x-liste-reservations :reservations="$reservations" :search="$search"/>
                                        </tbody>
                                    </table>
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
