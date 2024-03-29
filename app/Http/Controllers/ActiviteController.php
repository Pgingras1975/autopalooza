<?php

namespace App\Http\Controllers;

use App\Models\Activite;
use App\Models\Actualite;
use App\Models\Thematique;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ActiviteController extends Controller
{
    public function afficherActivite() {
        return view('activites', [
            "activites" => Activite::all()
        ]);
    }

    /**
     * Affiche la page d'ajout d'une nouvelle Activite
     *
     */
    public function create() {

        // protection de la route /activite/creer
        // redirige à l'accueil si l'utilisateur authentifié n'est pas un employé
        if (auth()->user()->utype_id == 1){
            return view('activite.ajouter', [
                "authuser" => auth()->user()->nom_complet,
                "authuserid" => auth()->user()->id,
            ]);
        } else {
            return view('accueil', [
                "actualites" => Actualite::orderByDesc('created_at')->get(),
                "thematiques" => Thematique::all()
            ]);
        }
    }

    /**
     * Ajoute une nouvelle Activite dans la table
     *
     * @param Request $request champs à ajouter
     */
    public function store(Request $request){

        $request->validate([
            "nom" => 'required|max:255',
            "description" => 'required',
            "image" => "mimes:png,jpg,jpeg,webp",
        ],[
            'nom.required' => 'Le champs Nom est requis',
            'nom.max' => 'Le champs Nom doit avoir 255 caractères ou moins',
            'description.required' => 'Le champs Description est requis',
            "image.mimes" => "Le fichier doit avoir l'extension .png, .jpg, .jpeg ou .webp"
        ]);

        $activite = new Activite();
        $activite->nom = $request->nom;
        $activite->description = $request->description;


        // traitement de l'image
        if ($request->image) {
            Storage::putFile('public/img', $request->image);

            $activite->image = '/storage/img/' . $request->image->hashName();
        } else {
            $activite->image = '/storage/img/logo.png';
        }

        $activite->save();

        return redirect()->route('admin')->with('ajout-Activite', 'Nouvelle activité ajoutée!');
    }

    /**
     * Affiche la page de modificatiion d'un Activite
     *
     * @param int $id id du Activite
     */
    public function edit($id) {

        // protection de la route /activite/modifier
        // redirige à l'accueil si l'utilisateur authentifié n'est pas un employé
        if (auth()->user()->utype_id == 1){
        return view('activite.modifier', [
            "activite" => Activite::findOrFail($id),
            "id" => auth()->user()->id,
            "authuser" => auth()->user()->nom_complet,
            "authuserid" => auth()->user()->id,
        ]);
        } else {
            return view('accueil', [
                "actualites" => Actualite::orderByDesc('created_at')->get(),
                "thematiques" => Thematique::all()
            ]);
        }
    }

    /**
     * Modifie un Activite selon son id
     *
     * @param Request $request champs à modifier
     * @param int $id id de l'Activite
     */
    public function update(Request $request, $id) {

        $request->validate([
            "nom" => 'required|max:255',
            "description" => 'required',
            "image" => "mimes:png,jpg,jpeg,webp|nullable",
        ],[
            'nom.required' => 'Le champs Activite est requis',
            'nom.max' => 'Le champs Nom doit avoir 255 caractères ou moins',
            'description.required' => 'Le champs Description est requis',
            "image.mimes" => "Le fichier doit avoir l'extension .png, .jpg, .jpeg ou .webp"
        ]);


        $activite = Activite::findOrFail($id);

        $activite->id = $request->id;
        $activite->nom = $request->nom;
        $activite->description = $request->description;

        // traitement de l'image
        if ($request->image) {
            Storage::putFile('public/img', $request->image);
            $activite->image = '/storage/img/' . $request->image->hashName();
        }

        $activite->save();

        return redirect()->route('admin')->with('modification-Activite', 'Modification effectuée!');
    }

    /**
     * Supprime un Activite selon son id
     *
     * @param int $id id de l'Activite
     */
    public function destroy($id){

        $activite = Activite::findOrFail($id);

        $activite->delete();

        return redirect()
                ->route('admin')
                ->with('suppression-Activite', "L'activité a été supprimée!");
    }

}
