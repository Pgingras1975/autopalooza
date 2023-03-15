<x-dashboard-layout>

    <!-- <x-connexion-message /> -->

    <x-nav-dashboard :authuser="$authuser" :authuserid="$authuserid" />

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

        <div class="col-lg-6">
            {{-- @if ($authuserid == 1) --}}
            <!--Simple table example -->
            <div class="panel panel-primary">
                <div class="panel-heading entete h-50" style="background-color:#e71d36">
                    <p><i class="fa fa-bar-chart-o fa-fw"></i>Liste des Clients</p>
                    <form action="/client/rechercher" method="get">
                        <input type="text" name="search">
                        <input class="btn btn-danger" type="submit" value="Rechercher">
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
                <div class="panel-heading h-50" style="background-color:#e71d36">
                    <p><i class="fa fa-bar-chart-o fa-fw"></i>Liste des Activités</p>
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
                    <p><i class="fa fa-bar-chart-o fa-fw"></i>Liste des Réservations</p>
                    <form action="/reservation/rechercher" method="get">
                        <input type="text" name="search">
                        <input class="btn btn-danger" type="submit" value="Rechercher">
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
                    <i class="fa fa-bar-chart-o fa-fw"></i>Liste des Actualités
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
                    <i class="fa fa-bar-chart-o fa-fw"></i>Liste des Forfaits
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
                    <i class="fa fa-bar-chart-o fa-fw"></i>Liste des Employés
                </div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="table-responsive  h-300">
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


</div>
<!-- end page-wrapper -->

</div>
<!-- end wrapper -->




{{--
        <h1>Dashboard</h1> Bonjour {{ $auth_user }}

         <div class="p-3 d-flex">
            <a href="{{ url('/deconnexion') }}" class="btn btn-primary">Déconnexion</a>
            <a href="{{ route('creer-actualite') }}" class="btn btn-primary">Ajouter Actualité</a>
            <a href="{{ route('creer-activite') }}" class="btn btn-primary">Ajouter Activité</a>
            <a href="{{ route('creer-forfait') }}" class="btn btn-primary">Ajouter Forfait</a>

            @if ($authuserid == 1)
                <a href="{{ route('creer-employe') }}" class="btn btn-primary">Ajouter Employé</a>
            @endif
        </div>

            @if ($authuserid == 1)
                <div class="d-flex">
                    <div class="w-100 border h-200">
                        <h2>Liste des employé</h2>
                        <div class="d-flex">
                            <h5 class="w-25">Nom</h5>
                            <h5 class="w-25">id</h5>
                            <h5 class="w-50">E-mail</h5>
                        </div>
                        <x-liste-employes :employes="$employes" :authuserid="$authuserid"/>
                    </div>
                </div>
            @endif

        <div class="d-flex">
            <div class="w-50 border h-400">
                <h2>Liste des clients
                    <form action="/client/rechercher" method="get">
                        <input type="text" name="search">
                        <input class="btn btn-danger" type="submit" value="Rechercher">
                    </form>

                </h2>
                <div class="d-flex">
                    <h5 class="w-25">Nom</h5>
                    <h5 class="w-25">id</h5>
                    <h5 class="w-50">E-mail</h5>
                </div>
                <x-liste-clients :clients="$clients"/>
            </div>

            <div class="w-50 border h-400">
                <h2>Réservations
                    <form action="/reservation/rechercher" method="get">
                        <input type="text" name="search">
                        <input class="btn btn-danger" type="submit" value="Rechercher">
                    </form>

                </h2>
                <div class="d-flex">
                    <h5 class="w-25">Nom</h5>
                    <h5 class="w-25">Qty</h5>
                    <h5 class="w-25">Date Arrivée</h5>
                    <h5 class="w-25">Date Départ</h5>
                </div>
                <x-liste-reservations :reservations="$reservations"/>
            </div>
        </div>

        <div class="d-flex">
            <div class="w-33 border">
                <h2>Actualités</h2>
                <div class="d-flex">
                    <h5 class="w-25">Titre</h5>
                    <h5 class="w-25">Description</h5>
                </div>
                <x-liste-actualites :actualites="$actualites"/>
            </div>

            <div class="w-33 border">
                <h2>Activités</h2>
                <div class="d-flex">
                    <h5 class="w-50">Nom</h5>
                    <h5 class="w-25">Description</h5>
                </div>
                <x-liste-activites :activites="$activites"/>
            </div>

            <div class="w-33 border">
                <h2>Forfaits</h2>
                <div class="d-flex">
                    <h5 class="w-50">Description</h5>
                    <h5 class="w-25">Prix</h5>
                </div>
                <x-liste-forfaits :forfaits="$forfaits"/>
            </div>
        </div> --}}

</x-dashboard-layout>
