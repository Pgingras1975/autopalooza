<?php

namespace App\Http\Controllers;

use App\Models\Activite;
use App\Models\Actualite;
use App\Models\Forfait;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ClientController extends Controller
{

     /**
     * Affiche le formulaire d'enregistrement (création de compte)
     *
     */
    public function edit($id) {
        return view('client.modifier', [
            "usager" => User::findOrFail($id),
            "id" => auth()->user()->id,
            "authuser" => auth()->user()->nom_complet,
            "authuserid" => auth()->user()->id,
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
        $user->utype_id = 2;

        $user->save();

        // connexion de l'utilisateur ou Auth::login($user)
        // auth()->login($user);

        // Redirection
        return redirect()->route('admin')->with('modification-Client', 'Modification réussi!');

    }

    /**
     * affiche une liste de client dont le nom correspond au mot recherché
     *
     * @return void
     */
    public function rechercherClient(Request $request) {

        return view('client.resultat_recherche', [
            // "employes" => User::where('id', '>', 1 )->where('utype_id', '=', 1 )->orderBy('nom')->get(),
            "clients" => User::where('nom', 'LIKE', '%' . $request->search . '%' )
                        // ->orWhere('prenom', 'LIKE', '%' . $request->search . '%' )
                        ->where('utype_id', '>', 1)->orderBy('nom')->get(),
            // "reservations" => Reservation::all(),
            // "actualites" => Actualite::all(),
            // "activites" => Activite::all(),
            // "forfaits" => Forfait::all(),
            "authuser" => auth()->user()->nom_complet,
            "authuserid" => auth()->user()->id,
        ]);
    }

        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = User::select("*")->paginate(10);

        return view('admin.user_del', compact('users'));
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function delete($id)
    {
        User::find($id)->delete();

        return back();
    }
}
