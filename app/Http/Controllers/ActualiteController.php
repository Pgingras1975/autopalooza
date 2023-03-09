<?php

namespace App\Http\Controllers;

use App\Models\Actualite;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ActualiteController extends Controller
{
        /**
     * Affiche la page d'ajout d'un nouveau Actualite
     *
     */
    public function create() {
        return view('actualite.ajouter');
    }

    /**
     * Ajoute un nouveau Actualite dans la table
     *
     * @param Request $request champs à ajouter
     */
    public function store(Request $request){


        $request->validate([
            "titre" => 'required|max:255',
            "description" => 'required',
            "image" => "mimes:png,jpg,jpeg,webp",
            // "image" => "required|mimes:png,jpg,jpeg,webp",
        ],[
            'titre.required' => 'Le champs Titre est requis',
            'titre.max' => 'Le Titre doit avoir 255 caractères ou moins',
            'description.required' => 'Le champs Description est requis',
            // "image.required" => "L'image est requise",
            "image.mimes" => "Le fichier doit avoir l'extension .png, .jpg, .jpeg ou .webp"
        ]);

        $actualite = new Actualite();
        $actualite->titre = $request->titre;
        $actualite->description = $request->description;


        // traitement de l'image
        if ($request->image != null) {
            Storage::putFile('public/img', $request->image);

            $actualite->image = '/storage/img/' . $request->image->hashName();
        } else {
            $actualite->image = '/storage/img/logo.jpg';
        }

        $actualite->save();

        return redirect()->route('admin')->with('ajout-Actualite', 'Nouvelle Actualite ajoutée!');
    }

    /**
     * Affiche la page de modificatiion d'un Actualite
     *
     * @param int $id id du Actualite
     */
    public function edit($id) {
        return view('modifier', [
            "Actualite" => Actualite::findOrFail($id)
        ]);
    }

    /**
     * Modifie un Actualite selon son id
     *
     * @param Request $request champs à modifier
     * @param int $id id du Actualite
     */
    public function update(Request $request, $id) {

        $request->validate([
            "texte" => 'required|max:255'
        ],[
            'texte.required' => 'Le champs Actualite est requis',
            'texte.max' => 'Le Actualite doit avoir 255 caractères ou moins'
        ]);

        $Actualite = Actualite::findOrFail($id);

        $Actualite->id = $request->id;
        $Actualite->texte = $request->texte;


        $Actualite->save();

        return redirect()->route('Actualites')->with('modification-Actualite', 'Modification effectuée!');
    }

    /**
     * Supprime un Actualite selon son id
     *
     * @param int $id id du Actualite
     */
    public function destroy($id){

        $Actualite = Actualite::findOrFail($id);

        $Actualite->delete();

        return redirect()
                ->route('accueil')
                ->with('suppression-Actualite', 'Le Actualite a été supprimée!');
    }
}
