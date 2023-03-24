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
                            <p class="header-form-fs"><i class="fa fa-bar-chart-o fa-fw"></i>Forfaits</p>
                            <form method="POST" action="{{ route('forfait.delete', $forfait->id) }}">
                                @csrf
                                <input name="_method" type="hidden" value="DELETE">
                                <button type="submit" class="btn-supprimer show_confirm" data-toggle="tooltip" title='Delete'>Supprimer</button>
                            </form>
                        </div>

                        <div class="panel-body form-h">
                            <div class="container">
                                <form action="{{ url('/forfait/modifier/' . $forfait->id ) }}" method="post" enctype="multipart/form-data">
                                    @csrf

                                    @error('texte')
                                        <p class="alert alert-danger">{{ $message }}</p>
                                    @enderror

                                    <div class="row">
                                        <div class="col-25">
                                            <label for="nom">Nom</label>
                                        </div>
                                        <div class="col-75">
                                            <input type="text" id="nom" name="nom" value="{{ $forfait->nom }}">
                                            <x-form-message champ="nom" />
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-25">
                                            <label for="description">Description</label>
                                        </div>
                                        <div class="col-75">
                                            <textarea id="description" name="description" style="height:200px">{{ $forfait->description }}</textarea>
                                            <x-form-message champ="description" />
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-25">
                                            <label for="prix">Prix</label>
                                        </div>
                                        <div class="col-75">
                                            <input type="text" id="prix" name="prix" value="{{ $forfait->prix }}">
                                            <x-form-message champ="prix" />
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-25">
                                            <label for="date_arrivee">Date d'arrivée</label>
                                        </div>
                                        <div class="col-75">
                                            <input type="date" id="date_arrivee" name="date_arrivee">
                                            <x-form-message champ="date_arrivee" />
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-25">
                                            <label for="date_depart">Date de depart</label>
                                        </div>
                                        <div class="col-75">
                                            <input type="date" id="date_arrivee" name="date_depart">
                                            <x-form-message champ="date_depart" />
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-25">
                                            <label for="image">Image : </label>
                                            <img src="{{ $forfait->image }}" alt="" width="75">
                                         </div>
                                         <div class="col-75">
                                            <input type="file" name="image" id="">
                                        </div>
                                        <x-form-message champ="image" />
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
            <div>
        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

</x-dashboard-layout>
