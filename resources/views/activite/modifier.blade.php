<x-layout>
    <main class="w-50 m-auto mt-5">

        <div class="mb-3">
            <h1 class="d-flex justify-content-center">
                Modifier l'activite # {{ $activite->id }}
            </h1>
            <form action="{{ url('/activite/modifier/' . $activite->id ) }}" method="post" enctype="multipart/form-data">
                @csrf

                @error('texte')
                    <p class="alert alert-danger">{{ $message }}</p>
                @enderror

                <div class="form-floating mb-2">
                    <input type="text" class="form-control" id="nom" name="nom" value="{{ $activite->nom }}">
                    <label class="form" for="nom">nom</label>
                    <x-form-message champ="nom" />
                </div>

                <textarea class="form-control" id="faits" name="description" rows="3">{{ $activite->description }}</textarea>
                <x-form-message champ="description" />

                <label class="h4" for="image">Image : </label>
                <img src="{{ $activite->image }}" alt="" width="75">
                <input type="file" name="image" id="">
                <x-form-message champ="image" />

                <div class="d-flex justify-content-center p-3">
                    <input class="btn btn-success m-2" type="submit" value="Modiifer">
                </div>

                <a href="{{ url('activite/supprimer/' . $activite->id)}}" class="btn btn-primary">Supprimer</a>
                <a href="{{ route('admin')}}" class="btn btn-primary">Retour</a>
            </form>
        </div>

    </main>
</x-layout>
