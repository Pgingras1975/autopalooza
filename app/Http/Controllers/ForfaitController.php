<?php

namespace App\Http\Controllers;

use App\Models\Forfait;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ForfaitController extends Controller
{
        public function afficherForfait() {
        return view('forfaits', [

        ]);
    }

                /**
     * Affiche la page d'ajout d'un nouveau orfait
     *
     */
    public function create() {
        return view('forfait.ajouter');
    }

    /**
     * Ajoute un nouveau forfait dans la table
     *
     * @param Request $request champs à ajouter
     */
    public function store(Request $request){

        $request->validate([
            "nom" => 'required|max:255',
            "description" => 'required',
            'prix' => 'required',
            "image" => "mimes:png,jpg,jpeg,webp",
        ],[
            'nom.required' => 'Le champs Titre est requis',
            'nom.max' => 'Le Titre doit avoir 255 caractères ou moins',
            'description.required' => 'Le champs Description est requis',
            'prix.required' => 'Le champs Description est requis',
            "image.mimes" => "Le fichier doit avoir l'extension .png, .jpg, .jpeg ou .webp"
        ]);

        $forfait = new Forfait();
        $forfait->nom = $request->nom;
        $forfait->description = $request->description;
        $forfait->prix = $request->prix;


        // traitement de l'image
        if ($request->image) {
            Storage::putFile('public/img', $request->image);

            $forfait->image = '/storage/img/' . $request->image->hashName();
        } else {
            $forfait->image = '/storage/img/logo.png';
        }

        $forfait->save();

        return redirect()->route('admin')->with('ajout-Forfait', 'Nouvelle Activité ajoutée!');
    }

    /**
     * Affiche la page de modificatiion d'un forfait
     *
     * @param int $id id du forfait
     */
    public function edit($id) {
        return view('forfait.modifier', [
            "forfait" => forfait::findOrFail($id)
        ]);
    }

    /**
     * Modifie un forfait selon son id
     *
     * @param Request $request champs à modifier
     * @param int $id id du forfait
     */
    public function update(Request $request, $id) {

        $request->validate([
            "nom" => 'required|max:255',
            "description" => 'required',
            'prix' => 'required',
            "image" => "mimes:png,jpg,jpeg,webp|nullable",
        ],[
            'nom.required' => 'Le champs forfait est requis',
            'nom.max' => 'Le forfait doit avoir 255 caractères ou moins',
            'description.required' => 'Le champs Description est requis',
            'prix.required' => 'Le champs Description est requis',
            "image.mimes" => "Le fichier doit avoir l'extension .png, .jpg, .jpeg ou .webp"
        ]);


        $forfait = Forfait::findOrFail($id);

        $forfait->id = $request->id;
        $forfait->nom = $request->nom;
        $forfait->description = $request->description;
        $forfait->prix = $request->prix;

        // traitement de l'image
        if ($request->image) {
            Storage::putFile('public/img', $request->image);
            $forfait->image = '/storage/img/' . $request->image->hashName();
        }

        $forfait->save();

        return redirect()->route('admin')->with('modification-Forfait', 'Modification effectuée!');
    }

    /**
     * Supprime un forfait selon son id
     *
     * @param int $id id du forfait
     */
    public function destroy($id){

        $forfait = forfait::findOrFail($id);

        $forfait->delete();

        return redirect()
                ->route('admin')
                ->with('suppression-Forfait', "Le forfait a été supprimée!");
    }
}
