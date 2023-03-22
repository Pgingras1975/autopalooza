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
                        <div class="panel-heading entete header-form-h" style="background-color:#e71d36">
                            <p class="header-form-fs"><i class="fa fa-bar-chart-o fa-fw"></i>Clients</p>
                            <form method="POST" action="{{ route('client.delete', $usager->id) }}">
                                @csrf
                                <input name="_method" type="hidden" value="DELETE">
                                <button type="submit" class="btn-supprimer show_confirm" data-toggle="tooltip" title='Delete'>Supprimer</button>
                            </form>
                        </div>

                        <div class="panel-body form-h">
                            <div class="container">
                                <form form action="{{ url('/client/modifier/' . $usager->id ) }}" method="post">
                                    @csrf
                                    <div class="row">
                                    <div class="col-25">
                                        <label for="fname">Prenom</label>
                                    </div>
                                    <div class="col-75">
                                        <input type="text" id="prenom" name="prenom" value="{{ $usager->prenom }}">
                                        <x-form-message champ="prenom" />
                                    </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-25">
                                        <label for="lname">Last Name</label>
                                    </div>
                                    <div class="col-75">
                                        <input type="text" id="nom" name="nom" value="{{ $usager->nom }}">
                                        <x-form-message champ="nom" />
                                    </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-25">
                                        <label for="subject">Subject</label>
                                    </div>
                                    <div class="col-75">
                                        <input type="email" id="email" name="email" value="{{ $usager->email }}">
                                        <x-form-message champ="email" />
                                    </div>
                                    </div>
                                    <div class="row">
                                    <div class="btn-position">
                                        <input class="btn-modifier" type="submit" value="Modifier">
                                        <a class="btn-annuler" href="{{ route('admin') }}">Annuler</a>
                                    </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    <div>
                    <!-- /.panel-primary -->
                <div>

                <div class="col-lg-3">

                </div>

            <div>
        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

</x-dashboard-layout>
