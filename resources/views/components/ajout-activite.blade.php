<div class="form-popup" id="myForm">

    <div class="panel panel-primary">
        <div class="panel-heading entete header-h" style="background-color:#e71d36">
            <p class="header-fs"><i class="fa fa-bar-chart-o fa-fw"></i>Activités</p>
        </div>

        <div class="panel-body form-h">
            <div class="container">

                <form form action="{{ url('/activite/sauvegarder/') }}" method="post" enctype="multipart/form-data">
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

                    <div>
                        <label class="h4" for="image">Image : </label>
                        <input type="file" name="image" id="">
                        <x-form-message champ="image" />
                    </div>

                    <div class="row">
                        <div class="btn-position">
                            <input class="btn-modifier" type="submit" value="Ajouter">
                            <button type="button" class="btn-annuler" onclick="closeForm()">Annuler</button>
                            {{-- <a class="btn-annuler" href="{{ route('admin') }}">Annuler</a> --}}
                        </div>
                    </div>
                </form>

            </div>
        </div>
    <!-- /.panel-primary -->
    <div>

</div>
