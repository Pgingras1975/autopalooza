<x-dashboard-layout>

    <div id="wrapper">

        <x-nav-dashboard :authuser="$authuser" :authuserid="$authuserid"/>

        <!--  page-wrapper -->
        <div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header font-36">Dashboard</h1>
                </div>
                <!--End Page Header -->
            </div>

            <div class="row">
                <div class="col-lg-3">

                </div>

                <div class="col-lg-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading entete header-h" style="background-color:#e71d36">
                            <p class="header-fs"><i class="fa fa-bar-chart-o fa-fw"></i>Réservation de : {{ $reservation->nom_de_famille }}</p>
                        </div>

                        <div class="panel-body form-reservation-h">
                            <div class="row">
                                <h2>Nom du forfait : {{ $reservation->nom_du_forfait}}</h2>
                                <h3>Qty : {{ $reservation->qty }}</h3>
                                <h4>Arrivée : {{ $reservation->date_arrivee }}</h4>
                                <h4>Départ : {{ $reservation->date_arrivee }}</h4>
                                <form method="POST" action="{{ route('reservation.delete', $reservation->id) }}">
                                    @csrf
                                    <input name="_method" type="hidden" value="DELETE">
                                    <button type="submit" class="btn btn-xs btn-danger btn-flat show_confirm" data-toggle="tooltip" title='Delete'>Delete</button>
                                </form>
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.panel-body -->
                    <div>
                    <!-- /.panel-primary -->
                <div>
            <div>
        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

</x-dashboard-layout>
