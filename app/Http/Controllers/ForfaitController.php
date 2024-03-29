<?php

namespace App\Http\Controllers;

use App\Models\Actualite;
use App\Models\Forfait;
use App\Models\Thematique;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ForfaitController extends Controller
{
        public function afficherForfait() {
        return view('forfaits', [
            "forfaits" => Forfait::all()->unique('nom')
        ]);
    }

    /**
     * Affiche la page d'ajout d'un nouveau forfait
     *
     */
    public function create() {

        // protection de la route forfait/creer
        // redirige à l'accueil si l'utilisateur authentifié n'est pas un employé
        if (auth()->user()->utype_id == 1){
            return view('forfait.ajouter', [
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
     * Ajoute un nouveau forfait dans la table
     *
     * @param Request $request champs à ajouter
     */
    public function store(Request $request){

        $request->validate([
            "nom" => 'required|max:255',
            "description" => 'required',
            'prix' => 'required|max:8',
            "image" => "mimes:png,jpg,jpeg,webp",
            'date_arrivee' => 'required',
            'date_depart' => 'required',
        ],[
            'nom.required' => 'Le champs Nom est requis',
            'nom.max' => 'Le champs Nom doit avoir 255 caractères ou moins',
            'description.required' => 'Le champs Description est requis',
            'prix.required' => 'Le champs Prix est requis',
            'prix.max' => 'Le champs Prix ne peut avoir une syntaxe maximale diférente de 9999.99$',
            "image.mimes" => "Le fichier doit avoir l'extension .png, .jpg, .jpeg ou .webp",
            'date_arrivee.required' => 'Le champs Date d\'arrivée est requis',
            'date_depart.required' => 'Le champs Date de départ est requis',
        ]);

        $forfait = new Forfait();
        $forfait->nom = $request->nom;
        $forfait->description = $request->description;
        $forfait->prix = $request->prix;
        $forfait->date_arrivee = $request->date_arrivee;
        $forfait->date_depart = $request->date_depart;

        // traitement de l'image
        if ($request->image) {
            Storage::putFile('public/img', $request->image);

            $forfait->image = '/storage/img/' . $request->image->hashName();
        } else {
            $forfait->image = '/storage/img/logo.png';
        }

        $forfait->save();

        return redirect()->route('admin')->with('ajout-Forfait', 'Nouveau forfait ajouté!');
    }

    /**
     * Affiche la page de modificatiion d'un forfait
     *
     * @param int $id id du forfait
     */
    public function edit($id) {

        // protection de la route forfait/modifier
        // redirige à l'accueil si l'utilisateur authentifié n'est pas un employé
        if (auth()->user()->utype_id == 1){
        return view('forfait.modifier', [
            "forfait" => forfait::findOrFail($id),
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
     * Modifie un forfait selon son id
     *
     * @param Request $request champs à modifier
     * @param int $id id du forfait
     */
    public function update(Request $request, $id) {

        $request->validate([
            "nom" => 'required|max:255',
            "description" => 'required',
            'prix' => 'required|max:8',
            "image" => "mimes:png,jpg,jpeg,webp|nullable",
            'date_arrivee' => 'required',
            'date_depart' => 'required',
        ],[
            'nom.required' => 'Le champs Nom est requis',
            'nom.max' => 'Le champs Nom doit avoir 255 caractères ou moins',
            'description.required' => 'Le champs Description est requis',
            'prix.required' => 'Le champs Prix est requis',
            'prix.max' => 'Le champs Prix ne peut avoir une syntaxe maximale diférente de 9999.99$',
            "image.mimes" => "Le fichier doit avoir l'extension .png, .jpg, .jpeg ou .webp",
            'date_arrivee.required' => 'Le champs Date d\'arrivée est requis',
            'date_depart.required' => 'Le champs Date de départ est requis',
        ]);


        $forfait = Forfait::findOrFail($id);

        $forfait->id = $request->id;
        $forfait->nom = $request->nom;
        $forfait->description = $request->description;
        $forfait->prix = $request->prix;
        $forfait->date_arrivee = $request->date_arrivee;
        $forfait->date_depart = $request->date_depart;

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

        // redirige vers la route admin si erreur de suppression de clé etrangère
        try {
            $forfait->delete();
        }
        catch (\Illuminate\Database\QueryException $e) {

            if($e->getCode() == "23000"){
                return redirect()
                ->route('admin')
                ->with('suppression-Forfait-Erreur', "Ce forfait ne peut être supprimé car il appartient déjà à une réservation. Veuillez supprimer toutes réservations contenant ce forfait avant d'effectuer cette action.");
            }
        }

        return redirect()
                ->route('admin')
                ->with('suppression-Forfait', "Le forfait a été supprimé!");
    }
}
