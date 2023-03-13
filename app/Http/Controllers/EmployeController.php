<?php

namespace App\Http\Controllers;

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
        return view('employe.ajouter');
    }

    /**
     * Traite les données d'un nouvel enregistrement
     *
     * @param Request $request Données reçues
     */
    public function store(Request $request) {

        // valider
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'password-confirm' => 'required|same:password',

        ], [
            'nom.required' => 'Le nom est requis',
            'prenom.required' => 'Le prénom est requis',
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

        // connexion de l'utilisateur ou Auth::login($user)
        auth()->login($user);

        // Redirection
        return redirect()->route('admin')->with('success-creation', 'Création d\'un nouvel employé réussi!');

    }

            /**
     * Affiche le formulaire d'enregistrement (création de compte)
     *
     */
    public function edit($id) {
        return view('employe.modifier', [
            "usager" => User::findOrFail($id),
            "id" => auth()->user()->id
        ]);
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
            // 'email' => 'required|email|unique:users,email',
            'email' => 'required|email',
            'password' => 'nullable',
            // 'password-confirm' => 'required|same:password',

        ], [
            'nom.required' => 'Le nom est requis',
            'prenom.required' => 'Le prénom est requis',
            'email.required' => 'Le courriel est requis',
            'email.email' => 'Le courriel doit être valide',
            // 'email.unique' => 'Ce courriel existe déjà',
            // 'password.required' => 'Le mot de passe est requis',
            // 'password-confirm.required' => 'La confirmation du mot de passe est requise',
            // 'password-confirm.same' => 'La confirmation du mot de passe ne correspond pas au mot de passe entré',
        ]);

        //envoyer les infos au modèle
        $user = User::findorfail($id);

        $user->id = $request->id;
        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->email = $request->email;
        // $user->password = Hash::make($request->password);
        // $user->utype_id = 1;

        $user->save();

        // connexion de l'utilisateur ou Auth::login($user)
        // auth()->login($user);

        // Redirection
        return redirect()->route('admin')->with('modification-Employe', 'Modification réussi!');

    }

        /**
     * Supprime un forfait selon son id
     *
     * @param int $id id du forfait
     */
    public function destroy($id){

        $user = User::findOrFail($id);

        $user->delete();

        return redirect()
                ->route('admin')
                ->with('suppression-Employe', "L\'employé a été supprimée!");
    }
}
