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
                        <div class="panel-heading entete header-h" style="background-color:#e71d36">
                            <p class="header-fs"><i class="fa fa-bar-chart-o fa-fw"></i>Ajouter un nouveau forfait</p>
                        </div>

                        <div class="panel-body form-h">
                            <div class="container">

                                <form form action="{{ url('/forfait/sauvegarder/') }}" method="post" enctype="multipart/form-data">
                                    @csrf

                                    @error('texte')
                                        <p class="alert alert-danger">{{ $message }}</p>
                                    @enderror

                                    <div class="row">
                                        <div class="col-25">
                                            <label for="nom">Nom</label>
                                        </div>
                                        <div class="col-75">
                                            <input type="text" id="nom" name="nom" autofocus>
                                            <x-form-message champ="nom" />
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-25">
                                            <label for="subject">Description</label>
                                        </div>
                                        <div class="col-75">
                                            <textarea id="description" name="description" style="height:200px"></textarea>
                                            <x-form-message champ="description" />
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-25">
                                            <label for="prix">Prix</label>
                                        </div>
                                        <div class="col-75">
                                            <input type="text" id="prix" name="prix">
                                            <x-form-message champ="prix" />
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-25">
                                            <label for="image">Image : </label>
                                         </div>
                                         <div class="col-75">
                                            <input type="file" name="image" id="">
                                        </div>
                                        <x-form-message champ="image" />
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
