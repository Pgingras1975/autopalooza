<?php

namespace App\Http\Controllers;

use App\Models\Actualite;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ActualiteController extends Controller
{
    /**
     * Affiche la page d'ajout d'une nouvelle Actualite
     *
     */
    public function create() {
        return view('actualite.ajouter', [
            "authuser" => auth()->user()->nom_complet,
            "authuserid" => auth()->user()->id,
        ]);
    }

    /**
     * Ajoute une Actualite dans la table
     *
     * @param Request $request champs à ajouter
     */
    public function store(Request $request){


        $request->validate([
            "titre" => 'required|max:255',
            "description" => 'required',
            "image" => "mimes:png,jpg,jpeg,webp",
        ],[
            'titre.required' => 'Le champs Titre est requis',
            'titre.max' => 'Le Titre doit avoir 255 caractères ou moins',
            'description.required' => 'Le champs Description est requis',
            "image.mimes" => "Le fichier doit avoir l'extension .png, .jpg, .jpeg ou .webp"
        ]);

        $actualite = new Actualite();
        $actualite->titre = $request->titre;
        $actualite->description = $request->description;


        // traitement de l'image
        if ($request->image) {
            Storage::putFile('public/img', $request->image);

            $actualite->image = '/storage/img/' . $request->image->hashName();
        } else {
            $actualite->image = '/storage/img/logo.png';
        }

        $actualite->save();

        return redirect()->route('admin')->with('ajout-Actualite', 'Nouvelle Actualite ajoutée!');
    }

    /**
     * Affiche la page de modificatiion d'une Actualite
     *
     * @param int $id id de l'Actualite
     */
    public function edit($id) {
        return view('actualite.modifier', [
            "actualite" => Actualite::findOrFail($id),
            "id" => auth()->user()->id,
            "authuser" => auth()->user()->nom_complet,
            "authuserid" => auth()->user()->id,
        ]);
    }

    /**
     * Modifie un Actualite selon son id
     *
     * @param Request $request champs à modifier
     * @param int $id id de l'Actualite
     */
    public function update(Request $request, $id) {

        $request->validate([
            "titre" => 'required|max:255',
            "description" => 'required',
            "image" => "mimes:png,jpg,jpeg,webp|nullable",
        ],[
            'titre.required' => 'Le champs Actualite est requis',
            'titre.max' => 'Le Actualite doit avoir 255 caractères ou moins',
            'description.required' => 'Le champs Description est requis',
            "image.mimes" => "Le fichier doit avoir l'extension .png, .jpg, .jpeg ou .webp"
        ]);


        $actualite = Actualite::findOrFail($id);

        $actualite->id = $request->id;
        $actualite->titre = $request->titre;
        $actualite->description = $request->description;

        // traitement de l'image
        if ($request->image) {
            Storage::putFile('public/img', $request->image);
            $actualite->image = '/storage/img/' . $request->image->hashName();
        }

        $actualite->save();

        return redirect()->route('admin')->with('modification-Actualite', 'Modification effectuée!');
    }

    /**
     * Supprime un Actualite selon son id
     *
     * @param int $id id de l'Actualite
     */
    public function destroy($id){

        $Actualite = Actualite::findOrFail($id);

        $Actualite->delete();

        return redirect()
                ->route('admin')
                ->with('suppression-Actualite', 'Le Actualite a été supprimée!');
    }
}
