<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ApiEnregistrementController extends Controller
{


     /**
    * Traitements des réservations à la bdd
    *
    * @param Request $request Données reçues
    */
    public function store(Request $request) {
        // Vérifie l'utilisateur connecté
        $user = auth()->user();

       // Valider
       $request->validate([
        'panier' => 'required',
    ], [
        'panier.required' => 'Il doit y avoir quelques choses au panier',
    ]);

        $panier = json_decode($request->panier);
         dd($panier);
        // Création d'un nouvel utilisateur
        $reservation = new Reservation();
        $reservation->qty = $request->qty;
        $reservation->forfait_id = $request->forfait_id;
        $reservation->user_id = $user->id;


        // Sauvegarde des données
        $reservation->save();
    }
}
