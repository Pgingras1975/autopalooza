{{-- <x-layout> --}}
    {{-- <main class="w-50 m-auto mt-5">

        <div class="mb-3">
            <h1 class="d-flex justify-content-center">
                Ajouter une nouvelle activite
            </h1>

            <form action="{{ url('/activite/sauvegarder') }}" method="post" enctype="multipart/form-data">
                @csrf

                @error('texte')
                    <p class="alert alert-danger">{{ $message }}</p>
                @enderror

                <div class="form-floating mb-2">
                    <input type="text" class="form-control" id="nom" name="nom" value="{{ old('nom') }}">
                    <label class="form" for="nom">Nom</label>
                    <x-form-message champ="nom" />
                </div>

                <div class="form-floating mb-2">
                    <textarea class="form-control" id="faits" name="description" rows="3">{{ old('description') }}</textarea>
                    <label class="form" for="description">Description</label>
                    <x-form-message champ="description" />
                </div>


                <label class="h4" for="image">Image : </label>
                <input type="file" name="image" id="">
                <x-form-message champ="image" />

                <div class="d-flex justify-content-center p-3">
                    <input class="btn btn-success m-2" type="submit" value="Ajouter">
                </div>
            </form>
        </div>

    </main> --}}
{{-- </x-layout> --}}


<div class="form-w">
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
                            <input type="text" id="nom" name="nom">
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

                    <label class="h4" for="image">Image : </label>
                    <input type="file" name="image" id="">
                    <x-form-message champ="image" />

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
