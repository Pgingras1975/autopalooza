    {{-- <main class="w-25 m-auto mt-5 border rounded min-w">

        <div class="container py-5">
            <h1 class="text-center m-0 fs-1">Modifier un employé</h1>

            <form action="{{ url('/employe/modifier/' . $employe->id ) }}" method="post" class="mt-4">
                @csrf

                <div class="w-75 m-auto">
                    <div class="form-floating mb-2">
                        <input type="text" class="form-control" id="prenom" name="prenom" value="{{ $employe->prenom }}"
                            placeholder="Votre prénom" autofocus>
                        <label class="form" for="prenom">Prénom</label>
                        <x-form-message champ="prenom" />
                    </div>

                    <div class="form-floating mb-2">
                        <input type="text" class="form-control" id="nom" placeholder="Votre nom" name="nom" value="{{ $employe->nom }}">
                        <label class="form" for="nom">Nom</label>
                        <x-form-message champ="nom" />
                    </div>

                    <div class="form-floating mb-2">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Courriel" value="{{ $employe->email }}">
                        <label class="form" for="email">Courriel</label>
                        <x-form-message champ="email" />
                    </div> --}}
                    {{-- <input type="hidden" name="password" value="{{ $employe->password }}"> --}}

                    {{-- <div class="form-floating mb-2">
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Mot de passe" autocomplete="off">
                        <label class="form" for="password">Mot de passe</label>
                        <x-form-message champ="password" />
                    </div>

                    <div class="form-floating mb-2">
                        <input type="password" class="form-control" id="password-confirm" name="password-confirm"
                            placeholder="Confirmez le mot de passe" autocomplete="off">
                        <label class="form" for="password-confirm">Confirmez le mot de passe</label>
                        <x-form-message champ="password-confirm" />
                    </div> --}}

                    {{-- <p class="d-flex justify-content-center my-5">
                        <input type="submit" class="btn btn-dark me-2" value="Modifier">

                    @if ($id == 1)
                        <a href="{{ url('employe/supprimer/' . $employe->id)}}" class="btn btn-primary">Supprimer</a>
                    @endif
                    <a href="{{ route('admin')}}" class="btn btn-primary">Retour</a>
                    </p>
                </div>
            </form>
        </div>
    </main> --}}



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
                            <p class="header-fs"><i class="fa fa-bar-chart-o fa-fw"></i>Employés</p>
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                        Menu
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li><a href="#">Menu</a>
                                        </li>
                                        <li class="divider"></li>
                                        {{-- @if ($id == 1) --}}
                                        <li><a href="{{ url('employe/supprimer/' . $employe->id)}}">Supprimer</a>
                                        </li>
                                        {{-- @endif --}}
                                        <li><a href="{{ route('admin')}}">Retour</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="panel-body form-h-300">
                            <div class="row">

                                <div class="container py-5 row mb-3 pt-5">

                                    <form action="{{ url('/employe/modifier/' . $employe->id ) }}" method="post" class="mt-4">
                                        @csrf

                                        <div class="w-75 m-auto">
                                            <div class="p-20">
                                                <label class="form col-sm-2 col-form-label" for="prenom">Prénom</label>
                                                <input type="text" class="" id="prenom" name="prenom" value="{{ $employe->prenom }}"
                                                    placeholder="Votre prénom" autofocus>
                                                <x-form-message champ="prenom" />
                                            </div>

                                            <div class="p-20">
                                                <label class="form col-sm-2 col-form-label" for="nom">Nom</label><div>
                                                <input type="text" class="" id="nom" placeholder="Votre nom" name="nom" value="{{ $employe->nom }}">
                                            </div>
                                                <x-form-message champ="nom" />
                                            </div>

                                            <div class="p-20">
                                                <label class="form col-sm-2 col-form-label  " for="email">Courriel</label>
                                                <input type="email" class="" id="email" name="email" placeholder="Courriel" value="{{ $employe->email }}">
                                                <x-form-message champ="email" />
                                            </div>
                                            <div class="p-20">
                                                <p class="d-flex justify-content-center my-5">
                                                    <input type="submit" class="btn btn-dark me-2" value="Modifier">
                                                </p>
                                            </div>
                                        </div>
                                    </form>

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
