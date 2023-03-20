<x-dashboard-layout>

    <div id="wrapper" onload="opacityFadeOut()">

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
                            <p class="header-form-fs"><i class="fa fa-bar-chart-o fa-fw"></i>Ajouter un nouvel employé</p>
                        </div>

                        <div class="panel-body form-h">
                            <div class="container">

                                <form form action="{{ url('/employe/sauvegarder/') }}" method="post" enctype="multipart/form-data">
                                    @csrf

                                    @error('texte')
                                        <p class="alert alert-danger">{{ $message }}</p>
                                    @enderror

                                    <div class="row">
                                        <div class="col-25">
                                            <label class="form" for="prenom">Prénom</label>
                                        </div>
                                        <div class="col-75">
                                            <input type="text" id="prenom" name="prenom" placeholder="Prénom" autofocus value="{{ old('prenom') }}">
                                            <x-form-message champ="prenom" />
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-25">
                                            <label class="form" for="nom">Nom</label>
                                        </div>
                                        <div class="col-75">
                                            <input type="text" id="nom" name="nom" placeholder="Nom" value="{{ old('nom') }}">
                                            <x-form-message champ="nom" />
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-25">
                                            <label class="form" for="email">E-mail</label>
                                        </div>
                                        <div class="col-75">
                                            <input type="text" id="email" name="email" placeholder="E-mail" value="{{ old('email') }}">
                                            <x-form-message champ="email" />
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-25">
                                            <label class="form" for="password">Mot de passe</label>
                                        </div>
                                        <div class="col-75">
                                            <input type="password" id="password" name="password" placeholder="Mot de passe" autocomplete="off">
                                            <x-form-message champ="password"/>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-25">
                                            <label class="form" for="password-confirm">Confirmez le mot de passe</label>
                                        </div>
                                        <div class="col-75">
                                            <input type="password" id="password-confirm" name="password-confirm" placeholder="Confirmez le mot de passe" autocomplete="off">
                                            <x-form-message champ="password-confirm"/>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="btn-position">
                                            <input class="btn-modifier" type="submit" value="Ajouter">
                                            <a class="btn-annuler" href="{{ route('admin') }}">Annuler</a>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    <div>
                <div>

                <div class="col-lg-3">

                </div>

            <div>
        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

</x-dashboard-layout>
