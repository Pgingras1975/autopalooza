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

       // Validation  de l'information reçu
       $request->validate([
        'panier' => 'required',
        ], [
        'panier.required' => 'Il doit y avoir quelques choses au panier',
        ]);

        $panier = json_decode($request->panier, true);

        var_dump($panier);
        var_dump($user);
        // exit();


        foreach($panier as $achat=>$quantite) {
            $reserver = new Reservation();
            $reserver->qty = $quantite;
            $reserver->forfait_id = $achat;
            $reserver->user_id = $user->id;
            $reserver->save();
        }

        return response()->json([
            'message' => "Réservation réussie"
        ]);

}
}
