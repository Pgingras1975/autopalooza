<x-dashboard-layout>

<div id="wrapper">

    <x-nav-dashboard :authuser="$authuser" :authuserid="$authuserid"/>

    <!--  page-wrapper -->
    <div id="page-wrapper" class="wrapper">

        <x-dashboard-header :authuser="$authuser" :authuserid="$authuserid"/>

        <x-message-confirmation />

        <div class="row margin-top">

            <div class="col-lg-4">
                <!--Simple table example -->
                <div class="panel panel-primary">
                    <div class="panel-heading entete header-h" style="background-color:#e71d36">
                        <p class="header-fs"><i class="fa fa-bar-chart-o fa-fw"></i>Clients</p>
                        <form class="search-field" action="/client/rechercher" method="get">
                            <input class="input-search-client" type="text" name="search">
                            <input class="btn btn-search" type="submit" value="🔍">
                        </form>
                    </div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive grille-h">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>Nom</th>
                                                <th>Prénom</th>
                                                <th>Courriel</th>
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
            </div>

            <div class="col-lg-4">
                <!--Simple table example -->
                <div class="panel panel-primary">
                    <div class="panel-heading entete header-h" style="background-color:#e71d36">
                        <p class="header-fs"><i class="fa fa-bar-chart-o fa-fw"></i>Réservations</p>
                        <form class="search-field" action="/reservation/rechercher" method="get">
                            <input class="input-search-reservation"type="text" name="search">
                            <input class="btn btn-search" type="submit" value="🔍">
                        </form>
                    </div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive grille-h">
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

            <div class="col-lg-4">
                <!--Simple table example -->
                <div class="panel panel-primary">
                    <div class="panel-heading header-h entete" style="background-color:#e71d36">
                        <p class="header-fs"><i class="fa fa-bar-chart-o fa-fw"></i>Activités</p>
                    </div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive grille-h">
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

            <div class="col-lg-4">
                <!--Simple table example -->
                <div class="panel panel-primary">
                    <div class="panel-heading header-h  entete" style="background-color:#e71d36">
                    <p class="header-fs"><i class="fa fa-bar-chart-o fa-fw"></i>Actualités</p>
                    </div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive grille-h">
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

            <div class="col-lg-4">
                <!--Simple table example -->
                <div class="panel panel-primary">
                    <div class="panel-heading header-h entete" style="background-color:#e71d36">
                        <p class="header-fs"><i class="fa fa-bar-chart-o fa-fw"></i>Forfaits</p>
                    </div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive grille-h">
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

            <div class="col-lg-4">
                <!--Simple table example -->
                <div class="panel panel-primary">
                    <div class="panel-heading header-h entete" style="background-color:#e71d36">
                        <p class="header-fs"><i class="fa fa-bar-chart-o fa-fw"></i>Employés</p>
                    </div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive grille-h">
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
                                                <x-liste-employes :employes="$employes" :authuserid="$authuserid" />
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

    </div>
    <!-- end page-wrapper -->

</div>
<!-- end wrapper -->

</x-dashboard-layout>
