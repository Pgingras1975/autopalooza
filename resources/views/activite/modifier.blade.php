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
                            <p class="header-form-fs"><i class="fa fa-bar-chart-o fa-fw"></i>Activités</p>
                            <form method="POST" action="{{ route('activite.delete', $activite->id) }}">
                                @csrf
                                <input name="_method" type="hidden" value="DELETE">
                                <button type="submit" class="btn-supprimer show_confirm" data-toggle="tooltip" title='Delete'>Supprimer</button>
                            </form>
                        </div>

                        <div class="panel-body form-h">
                            <div class="container">
                                <form action="{{ url('/activite/modifier/' . $activite->id ) }}" method="post" enctype="multipart/form-data">
                                    @csrf

                                    @error('texte')
                                        <p class="alert alert-danger">{{ $message }}</p>
                                    @enderror

                                    <div class="row">
                                        <div class="col-25">
                                            <label for="nom">Nom</label>
                                        </div>
                                        <div class="col-75">
                                            <input type="text" id="nom" name="nom" value="{{ $activite->nom }}">
                                            <x-form-message champ="nom" />
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-25">
                                            <label for="subject">Description</label>
                                        </div>
                                        <div class="col-75">
                                            <textarea id="description" name="description" style="height:200px">{{ $activite->description }}</textarea>
                                            <x-form-message champ="description" />
                                        </div>
                                    </div>

                                    <label class="h4" for="image">Image : </label>
                                    <img src="{{ $activite->image }}" alt="" width="75">
                                    <input type="file" name="image" id="">
                                    <x-form-message champ="image" />

                                    <div class="row">
                                        <div class="btn-position">
                                            <input class="btn-modifier" onclick="opacityFadeIn()" type="submit" value="Modifier" >
                                            <a class="btn-annuler" onclick="opacityFadeIn()" href="{{ route('admin') }}">Annuler</a>
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
