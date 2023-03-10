<x-layout>
    <main class="w-50 m-auto mt-5">

        <div class="mb-3">
            <h1 class="d-flex justify-content-center">
                Ajouter nouveau forfait
            </h1>

            <form action="{{ url('/forfait/sauvegarder') }}" method="post" enctype="multipart/form-data">
                @csrf

                @error('texte')
                    <p class="alert alert-danger">{{ $message }}</p>
                @enderror

                <div class="form-floating mb-2">
                    <input type="text" class="form-control" id="nom" name="nom" value="{{ old('nom') }}">
                    <label class="form" for="nom">nom</label>
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

    </main>
</x-layout>
