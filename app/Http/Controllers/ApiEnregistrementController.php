<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiEnregistrementController extends Controller
{
     /**
    * Traitements des questions et des éponses avec la BDD
    *
    * @param Request $request Données reçues
    */
    public function store(Request $request) {
        // Vérifie l'utilisateur connecté
        $user = auth()->user();

       // Valider
       $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users,email',
        "image" => "mimes:png,jpg,jpeg,webp|nullable",
        'password' => 'required',
        'password-confirm' => 'required|same:password'
    ], [
        'name.required' => 'Le nom est requis',
        'email.required' => 'Le courriel est requis',
        'email.email' => 'Le courriel doit être valide',
        'email.unique' => 'Ce courriel existe déjà',
        'password.required' => 'Le mot de passe est requis',
        'password-confirm.required' => 'La confirmation du mot de passe est requise',
        'password-confirm.same' => 'La confirmation du mot de passe ne correspond pas au mot de passe entré'
    ]);

        // Création d'un nouvel utilisateur
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;


        // Sauvegarde des données
        $user->save();
    }
}
