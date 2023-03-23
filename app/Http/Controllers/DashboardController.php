<?php

namespace App\Http\Controllers;

use App\Models\Activite;
use App\Models\Actualite;
use App\Models\Forfait;
use App\Models\Reservation;
use App\Models\Thematique;
use App\Models\User;

class DashboardController extends Controller
{
    /**
     * Affiche la page d'adminitration si L'usager connecté appartient au type "employé"
     */
    public function admin() {

        // protection de la route admin. redirige à l'accueil si le type d'utilisateur est client
        if(auth()->user()->utype_id == 1) {
            return view('admin.dashboard', [
                "employes" => User::where('id', '>', 1 )->where('utype_id', '=', 1 )->orderBy('nom')->get(),
                "clients" => User::where('utype_id', '=', 2 )->orderBy('nom')->get(),
                "reservations" => Reservation::join('users', 'reservations.user_id', '=', 'users.id')
                    ->join('forfaits','reservations.forfait_id', 'forfaits.id')
                    ->select('users.*', 'reservations.*', 'forfaits.nom AS nom_du_forfait', 'forfaits.date_arrivee', 'forfaits.date_depart')
                    ->orderBy('nom')->get(),
                "actualites" => Actualite::orderByDesc("created_at")->get(),
                "activites" => Activite::orderBy('nom')->get(),
                "forfaits" => Forfait::orderByDesc('prix')->get(),
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
}
