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

        <x-connexion-message />

        <div class="row">

            <div class="col-lg-6">
                {{-- @if ($authuserid == 1) --}}
                <!--Simple table example -->
                <div class="panel panel-primary">
                    <div class="panel-heading entete h-50" style="background-color:#e71d36">
                        <p class="header-fs"><i class="fa fa-bar-chart-o fa-fw"></i>Liste des Clients</p>
                        <form action="/client/rechercher" method="get">
                            <input type="text" name="search" size="16">
                            <input class="btn btn-danger" type="submit" value="🔍">
                        </form>
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
                                                <th>Courriel</th>
                                                <!-- <th>Amount</th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <x-liste-clients :clients="$clients"/>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!--End simple table example -->
                {{-- @endif --}}
            </div>

            <div class="col-lg-6">
                <!--Simple table example -->
                <div class="panel panel-primary">
                    <div class="panel-heading h-50 entete" style="background-color:#e71d36">
                        <p class="header-fs"><i class="fa fa-bar-chart-o fa-fw"></i>Liste des Activités</p>
                    </div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive h-300">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>Nom</th>
                                                <th>Description</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <x-liste-activites :activites="$activites"/>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!--End simple table example -->
            </div>

        </div>



        <div class="row">

            <div class="col-lg-6">
                <!--Simple table example -->
                <div class="panel panel-primary">
                    <div class="panel-heading entete h-50" style="background-color:#e71d36">
                        <p class="header-fs"><i class="fa fa-bar-chart-o fa-fw"></i>Liste des Réservations</p>
                        <form action="/reservation/rechercher" method="get">
                            <input type="text" name="search" size="16">
                            <input class="btn btn-danger" type="submit" value="🔍">
                        </form>
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
                                                <th>Qté</th>
                                                <th>Arrivé</th>
                                                <th>Départ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <x-liste-reservations :reservations="$reservations"/>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!--End simple table example -->
            </div>

            <div class="col-lg-6">
                <!--Simple table example -->
                <div class="panel panel-primary">
                    <div class="panel-heading h-50" style="background-color:#e71d36">
                    <p class="header-fs"><i class="fa fa-bar-chart-o fa-fw"></i>Liste des Actualités</p>
                    </div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive h-300">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>Titre</th>
                                                <th>Description</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <x-liste-actualites :actualites="$actualites"/>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!--End simple table example -->
            </div>

        </div>


        <div class="row">

            <div class="col-lg-6">
                <!--Simple table example -->
                <div class="panel panel-primary">
                    <div class="panel-heading h-50" style="background-color:#e71d36">
                        <p class="header-fs"><i class="fa fa-bar-chart-o fa-fw"></i>Liste des Forfaits</p>
                    </div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive h-300">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>Nom</th>
                                                <th>Description</th>
                                                <th>Prix</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <x-liste-forfaits :forfaits="$forfaits"/>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!--End simple table example -->
            </div>

            <div class="col-lg-6">
                <!--Simple table example -->
                <div class="panel panel-primary">
                    <div class="panel-heading h-50" style="background-color:#e71d36">
                        <p class="header-fs"><i class="fa fa-bar-chart-o fa-fw"></i>Liste des Employés</p>
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
                                                <th>Courriel</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <x-liste-employes :employes="$employes" />
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!--End simple table example -->
            </div>

        </div>

        {{-- <div class="row">
            <div class="col-lg-2">
                <x-form-dashboard/>
            </div>
            <div class="col-lg-8">
                <x-form-dashboard/>
            </div>
        <div> --}}

    </div>
    <!-- end page-wrapper -->

</div>
<!-- end wrapper -->



</x-dashboard-layout>
