<x-dashboard-layout>

    <div id="wrapper">

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
                            <p class="header-form-ajout-fs"><i class="fa fa-bar-chart-o fa-fw"></i>Ajouter une nouvelle activité</p>
                        </div>

                        <div class="panel-body form-h">
                            <div class="container">

                                <form action="{{ url('/activite/creer/') }}" method="post" enctype="multipart/form-data">
                                    @csrf

                                    @error('texte')
                                        <p class="alert alert-danger">{{ $message }}</p>
                                    @enderror

                                    <div class="row">
                                        <div class="col-25">
                                            <label for="nom">Nom</label>
                                        </div>
                                        <div class="col-75">
                                            <input type="text" id="nom" name="nom" autofocus value="{{ old('nom') }}">
                                            <x-form-message champ="nom" />
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-25">
                                            <label for="subject">Description</label>
                                        </div>
                                        <div class="col-75">
                                            <textarea id="description" name="description" style="height:200px">{{ old('description') }}</textarea>
                                            <x-form-message champ="description" />
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
            <div>
        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

</x-dashboard-layout>
