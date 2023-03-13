<x-dashboard-layout>

    <x-connexion-message />


    <div id="wrapper">

        <!-- navbar top -->
        <nav class="navbar navbar-default navbar-fixed-top" style="background-color:#011627" role="navigation" id="navbar">
            <!-- navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- <a class="navbar-brand" href="index.html">
                    <img src="assets/img/logo.png" alt="" height="80"/>
                </a> -->
            </div>
            <!-- end navbar-header -->
            <!-- navbar-top-links -->
            <ul class="nav navbar-top-links navbar-right">
                <!-- main dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="top-label label label-danger">3</span><i class="fa fa-envelope fa-3x"></i>
                    </a>
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="top-label label label-success">4</span>  <i class="fa fa-tasks fa-3x"></i>
                    </a>
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-3x"></i>
                    </a>
                    <!-- dropdown user-->
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="{{ url('/deconnexion') }}"><i class="fa fa-sign-out fa-fw"></i>Déconnexion</a>
                        </li>
                    </ul>
                    <!-- end dropdown-user -->
                </li>
                <!-- end main dropdown -->
            </ul>
            <!-- end navbar-top-links -->

        </nav>
        <!-- end navbar top -->

<!-- navbar side -->
<nav class="navbar-default navbar-static-side" style="background-color:#2ec4b6" role="navigation">
    <!-- sidebar-collapse -->
    <div class="sidebar-collapse" style="background-color:#2ec4b6">
        <!-- side-menu -->
        <ul class="nav" id="side-menu" style="background-color:#2ec4b6">
            <li>
                <!-- user image section-->
                <div class="user-section entete">
                    {{-- <div class="user-section-inner">
                        <img src="storage/img/logo.png" alt="">
                    </div> --}}
                    <div class="user-info">
                        <p class="auth-user">{{ $auth_user }}</p>
                        <div class="user-text-online">
                            <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
                        </div>
                    </div>
                </div>
                <!--end user image section-->
            </li>

            <li class="selected">
                <a href="index.html"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
            </li>
            <li style="background-color:#2ec4b6">
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Ajout<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('creer-activite') }}">Activités</a>
                    </li>
                    <li>
                        <a href="{{ route('creer-actualite') }}">Actualités</a>
                    </li>

                    @if ($authuserid == 1)
                        <li>
                            <a href="{{ route('creer-employe') }}">Employés</a>
                        </li>
                    @endif

                    <li>
                        <a href="{{ route('creer-forfait') }}">Forfaits</a>
                    </li>
                </ul>
                <!-- second-level-items -->
            </li>
             <li>
                <a href="{{ url('/deconnexion') }}"><i class="fa fa-sign-out fa-fw"></i>Deconnexion</a>
            </li>
        </ul>
        <!-- end side-menu -->
    </div>
    <!-- end sidebar-collapse -->
</nav>
<!-- end navbar side -->







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

                <div class="panel-body h-300">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="table-responsive">
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

                <div class="panel-body h-300">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="table-responsive">
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
                    <form action="/client/rechercher" method="get">
                        <input type="text" name="search">
                        <input class="btn btn-danger" type="submit" value="Rechercher">
                    </form>
                </div>

                <div class="panel-body h-300">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th>Nom</th>
                                            <th>Prénom</th>
                                            <th>Qté</th>
                                            <th>Départ</th>
                                            <th>Arrivé</th>
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

                <div class="panel-body h-300">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th>Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>3326</td>
                                            <td>10/21/2013</td>
                                            <td>3:29 PM</td>
                                            <td>$321.33</td>
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

                <div class="panel-body h-300">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th>Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>3326</td>
                                            <td>10/21/2013</td>
                                            <td>3:29 PM</td>
                                            <td>$321.33</td>
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

        <div class="col-lg-6">
            <!--Simple table example -->
            <div class="panel panel-primary">
                <div class="panel-heading h-50" style="background-color:#e71d36">
                    <i class="fa fa-bar-chart-o fa-fw"></i>Liste des Employés
                </div>

                <div class="panel-body h-300">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th>Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>3326</td>
                                            <td>10/21/2013</td>
                                            <td>3:29 PM</td>
                                            <td>$321.33</td>
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
        </div>

</x-dashboard-layout>
