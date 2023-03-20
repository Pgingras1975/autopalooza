<?php

namespace App\Http\Controllers;

use App\Models\Actualite;
use App\Models\Thematique;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class EmployeController extends Controller
{

        /**
     * Affiche le formulaire d'enregistrement (création de compte)
     *
     */
    public function create() {
        if (auth()->user()->id === 1){
            return view('employe.ajouter', [
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
     * Traite les données d'un nouvel enregistrement
     *
     * @param Request $request Données reçues
     */
    public function store(Request $request) {

        // valider
        $request->validate([
            'prenom' => 'required',
            'nom' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'password-confirm' => 'required|same:password',

        ], [
            'prenom.required' => 'Le prénom est requis',
            'nom.required' => 'Le nom est requis',
            'email.required' => 'Le courriel est requis',
            'email.email' => 'Le courriel doit être valide',
            'email.unique' => 'Ce courriel existe déjà',
            'password.required' => 'Le mot de passe est requis',
            'password-confirm.required' => 'La confirmation du mot de passe est requise',
            'password-confirm.same' => 'La confirmation du mot de passe ne correspond pas au mot de passe entré',
        ]);

        //envoyer les infos au modèle
        $user = new User();
        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->utype_id = 1;

        $user->save();

        // Redirection
        return redirect()->route('admin')->with('success-creation', 'Création d\'un nouvel employé réussi!');

    }

            /**
     * Affiche le formulaire d'enregistrement (création de compte)
     *
     */
    public function edit($id) {

        if (auth()->user()->id === 1){
            return view('employe.modifier', [
                "employe" => User::findOrFail($id),
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
     * Traite les données d'un nouvel enregistrement
     *
     * @param Request $request Données reçues
     */
    public function update(Request $request, $id) {

        // valider
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'email',
        ], [
            'nom.required' => 'Le nom est requis',
            'prenom.required' => 'Le prénom est requis',
            'email.email' => 'Le courriel doit être valide',
        ]);

        //envoyer les infos au modèle
        $user = User::findorfail($id);

        $user->id = $request->id;
        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->utype_id = 1;

        $user->save();


        // Redirection
        return redirect()->route('admin')->with('modification-Employe', 'Modification réussi!');

    }

    /**
     * Affiche le formulaire d'enregistrement (création de compte)
     *
     */
    public function editPwd($id) {
        if (auth()->user()->id === 1 || auth()->user()->id == $id){
            return view('employe.modifier_pwd', [
                "employe" => User::findOrFail($id),
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
     * Traite les données d'un nouvel enregistrement
     *
     * @param Request $request Données reçues
     */
    public function updatePwd(Request $request, $id) {

        // valider
        $request->validate([
            'password' => 'required',
            'password-confirm' => 'required|same:password',

        ], [
            'password.required' => 'Le mot de passe est requis',
            'password-confirm.required' => 'La confirmation du mot de passe est requise',
            'password-confirm.same' => 'La confirmation du mot de passe ne correspond pas au mot de passe entré',
        ]);

        //envoyer les infos au modèle
        $user = User::findorfail($id);

        $user->id = $request->id;
        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->utype_id = 1;

        $user->save();

        // Redirection
        return redirect()->route('admin')->with('modification-Employe', 'Modification réussi!');

    }
        /**
     * Supprime un employé selon son id
     *
     * @param int $id id du employé
     */
    public function destroy($id){

        $user = User::findOrFail($id);

        $user->delete();

        return redirect()
                ->route('admin')
                ->with('suppression-Employe', "L\'employé a été supprimée!");
    }
}
