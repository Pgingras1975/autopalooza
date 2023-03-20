<x-dashboard-layout>

{{-- <x-connexion-message /> --}}

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
            <div class="col-lg-2">

            </div>

            <div class="col-lg-8">
                <div class="panel panel-primary">
                    <div class="panel-heading entete header-form-h" style="background-color:#e71d36">
                        <p class="header-form-fs"><i class="fa fa-bar-chart-o fa-fw"></i>Résulat recherche clients</p>
                        {{-- <form action="/client/rechercher" method="get">
                            <input type="text" name="search" size="16">
                            <input class="btn btn-danger" type="submit" value="🔍">
                        </form> --}}
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
                <div>
                <!-- /.panel-primary -->
            <div>
        <div>
    </div>
    <!-- end page-wrapper -->

</div>
<!-- end wrapper -->



</x-dashboard-layout>
