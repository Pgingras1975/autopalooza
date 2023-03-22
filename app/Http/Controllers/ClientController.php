<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;

class ClientController extends Controller
{

     /**
     * Affiche le formulaire de modification d'un client
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
     * Modifie un clinet selon son id
     *
     * @param Request $request champs à modifier
     * @param int $id id du client
     */
    public function update(Request $request, $id) {

        // valider
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email',

        ], [
            'nom.required' => 'Le nom est requis',
            'prenom.required' => 'Le prénom est requis',
            'email.required' => 'Le courriel est requis',
            'email.email' => 'Le courriel doit être valide',
        ]);

        //envoyer les infos au modèle
        $user = User::findorfail($id);

        $user->id = $request->id;
        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->utype_id = 2;

        $user->save();

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
            "clients" => User::where('nom', 'LIKE', '%' . $request->search . '%' )->where('utype_id', '>', 1)->orderBy('nom')->get(),
            "authuser" => auth()->user()->nom_complet,
            "authuserid" => auth()->user()->id,
            "search" => $request->search,
        ]);
    }

    /**
     * Supprime un client selon son id
     *
     * @param int $id id du client
     */
    public function destroy($id){

        $user = User::findOrFail($id);

        try {
            $user->delete();
        }
        catch (\Illuminate\Database\QueryException $e) {

            if($e->getCode() == "23000"){
                return redirect()
                ->route('admin')
                ->with('suppression-Client-Erreur', "Ce client ne peut etre supprimé car il est déjà associé à une réservation. Veuillez supprimer cette réservation avant d'effectuer cette action.");
            }
        }

        return redirect()
                ->route('admin')
                ->with('suppression-Client', "Le client a été supprimé!");
    }

}
