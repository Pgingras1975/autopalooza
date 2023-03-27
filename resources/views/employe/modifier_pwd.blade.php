<x-dashboard-layout>

    <div id="wrapper_">

        <x-nav-dashboard :authuser="$authuser" :authuserid="$authuserid"/>

        <!--  page-wrapper -->
        <div id="page-wrapper" class="wrapper">

            <div class="row">
                <div class="padding-top-form"></div>
                <div class="col-lg-3">

                </div>

                <div class="col-lg-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading entete header-form-h" style="background-color:#e71d36">
                            <p class="header-form-pwd-fs"><i class="fa fa-bar-chart-o fa-fw"></i>{{ $employe->nom_complet}} (modifier mot de passe)

                            </p>
                        </div>

                        <div class="panel-body form-h">
                            <div class="container">
                                <form action="{{ url('/employe/modifier/pwd/' . $employe->id ) }}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-25">
                                            <label for="password">Mot de passe</label>
                                        </div>
                                        <div class="col-75">
                                            <input type="password" id="password" name="password" placeholder="Mot de passe" autocomplete="off" autofocus>
                                            <x-form-message champ="password" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-25">
                                            <label for="password-confirm">Confirmez le mot de passe</label>
                                        </div>
                                        <div class="col-75">
                                            <input type="password" id="password-confirm" name="password-confirm" placeholder="Confirmez le mot de passe" autocomplete="off">
                                            <x-form-message champ="password-confirm" />
                                        </div>
                                    </div>

                                    <input type="hidden" name="id" value="{{ $employe->id}}">
                                    <input type="hidden" name="nom" value="{{ $employe->nom}}">
                                    <input type="hidden" name="prenom" value="{{ $employe->prenom}}">
                                    <input type="hidden" name="email" value="{{ $employe->email}}">

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
            <div>
        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

</x-dashboard-layout>
