<x-dashboard-layout>

    <main class="w-25 m-auto mt-5 border rounded min-w">

        <div class="container py-5">
            <h1 class="text-center m-0 fs-1">Modifier un employé</h1>
            {{-- <h4 class="text-center fs-5">ou <a href="{{ url('/connexion') }}">connectez-vous</a></h4> --}}
            <form action="{{ url('/employe/modifier/' . $usager->id ) }}" method="post" class="mt-4">
                @csrf

                <div class="w-75 m-auto">
                    <div class="form-floating mb-2">
                        <input type="text" class="form-control" id="prenom" name="prenom" value="{{ $usager->prenom }}"
                            placeholder="Votre prénom" autofocus>
                        <label class="form" for="prenom">Prénom</label>
                        <x-form-message champ="prenom" />
                    </div>

                    <div class="form-floating mb-2">
                        <input type="text" class="form-control" id="nom" placeholder="Votre nom" name="nom" value="{{ $usager->nom }}">
                        <label class="form" for="nom">Nom</label>
                        <x-form-message champ="nom" />
                    </div>

                    <div class="form-floating mb-2">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Courriel" value="{{ $usager->email }}">
                        <label class="form" for="email">Courriel</label>
                        <x-form-message champ="email" />
                    </div>
                    {{-- <input type="hidden" name="password" value="{{ $usager->password }}"> --}}

                    {{-- <div class="form-floating mb-2">
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Mot de passe" autocomplete="off">
                        <label class="form" for="password">Mot de passe</label>
                        <x-form-message champ="password" />
                    </div>

                    <div class="form-floating mb-2">
                        <input type="password" class="form-control" id="password-confirm" name="password-confirm"
                            placeholder="Confirmez le mot de passe" autocomplete="off">
                        <label class="form" for="password-confirm">Confirmez le mot de passe</label>
                        <x-form-message champ="password-confirm" />
                    </div> --}}

                    <p class="d-flex justify-content-center my-5">
                        <input type="submit" class="btn btn-dark me-2" value="Modifier">

                    @if ($id == 1)
                        <a href="{{ url('employe/supprimer/' . $usager->id)}}" class="btn btn-primary">Supprimer</a>
                    @endif
                    <a href="{{ route('admin')}}" class="btn btn-primary">Retour</a>
                    </p>
                </div>
            </form>
        </div>
    </main>

</x-dashboard-layout>
