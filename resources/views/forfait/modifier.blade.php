<x-layout>
    <main class="w-50 m-auto mt-5">

        <div class="mb-3">
            <h1 class="d-flex justify-content-center">
                Modifier le forfait # {{ $forfait->id }}
            </h1>
            <form action="{{ url('/forfait/modifier/' . $forfait->id ) }}" method="post" enctype="multipart/form-data">
                @csrf

                @error('texte')
                    <p class="alert alert-danger">{{ $message }}</p>
                @enderror

                <div class="form-floating mb-2">
                    <input type="text" class="form-control" id="nom" name="nom" value="{{ $forfait->nom }}">
                    <label class="form" for="nom">nom</label>
                    <x-form-message champ="nom" />
                </div>

                <textarea class="form-control" id="faits" name="description" rows="3">{{ $forfait->description }}</textarea>
                <x-form-message champ="description" />

                <div class="form-floating mb-2">
                    <input type="text" class="form-control" id="prix" name="prix" value="{{ $forfait->prix }}">
                    <label class="form" for="prix">prix</label>
                    <x-form-message champ="prix" />
                </div>

                <label class="h4" for="image">Image : </label>
                <img src="{{ $forfait->image }}" alt="" width="75">
                <input type="file" name="image" id="">
                <x-form-message champ="image" />

                <div class="d-flex justify-content-center p-3">
                    <input class="btn btn-success m-2" type="submit" value="Modiifer">
                </div>

                <a href="{{ url('forfait/supprimer/' . $forfait->id)}}" class="btn btn-primary">Supprimer</a>

            </form>
        </div>

    </main>
</x-layout>
