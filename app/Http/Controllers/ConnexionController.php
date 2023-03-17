<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConnexionController extends Controller
{
    /**
     * Affiche le formulaire de connexion
     */
    public function connexion() {

        if (auth()->user()) {
            return view('accueil');
        } else {

            return view('auth.connexion');
        }
    }

    /**
     * Traite la connexion de l'utilisateur
     *
     * @param Request $request Contient les données de connexion
     */
    public function authentifier(Request $request) {
        $infos_valides = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ], [
            'email.required' => "Le courriel est requis",
            'email.email' => "Le courriel doit être valide",
            'password.required' => "Toutes les informations sont requises"
        ]);

        if(auth()->attempt($infos_valides)) {
            if(auth()->user()->utype_id == 1){
                return redirect()->route('admin')->with('success-connexion', 'Connexion réussie!');
            } else {
                return redirect()->route('reservation')->with('success-connexion', 'Connexion réussie!');
            }
        }

        return back()->with('echec-connexion', 'Les informations soumises n\'ont pu être vérifiées');

    }

    /**
     * Déconnecte l'utilisateur (supprime la session)
     */
    public function deconnecter() {
        auth()->logout();

        return redirect()->route('accueil')->with('success-deconnexion', 'Déonnexion réussie!');
    }
}
