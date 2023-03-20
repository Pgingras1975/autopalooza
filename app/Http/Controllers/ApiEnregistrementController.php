<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ApiEnregistrementController extends Controller
{


     /**
    * Traitements des questions et des éponses avec la BDD
    *
    * @param Request $request Données reçues
    */
    public function store() {
        // Vérifie l'utilisateur connecté
        $user = auth()->user();

       // Valider

        // Création d'un nouvel utilisateur
        $reservation = new Reservation();
        $reservation->user_id;
        $reservation->forfait_id;
        $reservation->qty;



        // Sauvegarde des données
        $reservation->save();
    }
}
