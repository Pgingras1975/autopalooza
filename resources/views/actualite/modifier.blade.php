
    {{-- <main class="w-50 m-auto mt-5">

        <div class="mb-3">
            <h1 class="d-flex justify-content-center">
                Modifier l'actualité # {{ $actualite->id }}
            </h1>
            <form action="{{ url('/actualite/modifier/' . $actualite->id ) }}" method="post" enctype="multipart/form-data">
                @csrf

                @error('texte')
                    <p class="alert alert-danger">{{ $message }}</p>
                @enderror

                <div class="form-floating mb-2">
                    <input type="text" class="form-control" id="titre" name="titre" value="{{ $actualite->titre }}">
                    <label class="form" for="titre">Titre</label>
                    <x-form-message champ="titre" />
                </div>

                <textarea class="form-control" id="faits" name="description" rows="3">{{ $actualite->description }}</textarea>
                <x-form-message champ="description" />

                <label class="h4" for="image">Image : </label>
                <img src="{{ $actualite->image }}" alt="" width="75">
                <input type="file" name="image" id="">
                <x-form-message champ="image" />

                <div class="d-flex justify-content-center p-3">
                    <input class="btn btn-success m-2" type="submit" value="Modiifer">
                </div>

                <a href="{{ url('actualite/supprimer/' . $actualite->id)}}" class="btn btn-primary">Supprimer</a>
                <a href="{{ route('admin')}}" class="btn btn-primary">Retour</a>

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
                        <div class="panel-heading entete h-50" style="background-color:#e71d36">
                            <p class="header-fs-24"><i class="fa fa-bar-chart-o fa-fw"></i>Actualités</p>
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
                                        <li><a href="{{ url('actualite/supprimer/' . $actualite->id)}}">Supprimer</a>
                                        </li>
                                        {{-- @endif --}}
                                        <li><a href="{{ route('admin')}}">Retour</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="panel-body form-actualite-h">
                            <div class="row">

                                <div class="container py-5 row mb-3 pt-5">

                                    <form action="{{ url('/actualite/modifier/' . $actualite->id ) }}" method="post" enctype="multipart/form-data">
                                        @csrf

                                        @error('texte')
                                            <p class="alert alert-danger">{{ $message }}</p>
                                        @enderror

                                        <div class="p-20">
                                            <label class="form form col-sm-2 col-form-label" for="titre">Titre</label>
                                            <input type="text" class="" id="titre" name="titre" value="{{ $actualite->titre }}">
                                            <x-form-message champ="titre" />
                                        </div>

                                        <div class="p-20">
                                            <label class="form form col-sm-2 col-form-label" for="titre">Titre</label>
                                            <textarea class="" id="faits" name="description" rows="6" cols="50">{{ $actualite->description }}</textarea>
                                            <x-form-message champ="description" />
                                        </div>
                                        <div class="p-20">
                                            <label class="form form col-sm-2 col-form-label" for="image">Image : </label>
                                            <input type="file" name="image" id="">
                                            <img src="{{ $actualite->image }}" alt="" width="75">
                                            <x-form-message champ="image" />
                                        </div>

                                        <div class="p-20" class="d-flex justify-content-center p-3">
                                            <input class="btn btn-dark m-2" type="submit" value="Modifier">
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
