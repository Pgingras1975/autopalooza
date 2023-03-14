<?php

namespace App\Http\Controllers;

use App\Models\Activite;
use App\Models\Actualite;
use App\Models\Forfait;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
        /**
     * Affiche la page des conversations de l'usager connecté
     */
    public function admin() {

        // dd(auth()->user());

        if(auth()->user()->utype_id == 1) {
            return view('admin.dashboard', [
                "employes" => User::where('id', '>', 1 )->where('utype_id', '=', 1 )->orderBy('nom')->get(),
                "clients" => User::where('utype_id', '=', 2 )->orderBy('nom')->get(),
                // "reservations" => Reservation::all(),
                "reservations" => User::join('reservations', 'users.id', '=', 'reservations.user_id')
                        ->select('users.*', 'reservations.*')
                        ->orderBy('nom')->get(),
                "actualites" => Actualite::all(),
                "activites" => Activite::all(),
                "forfaits" => Forfait::all(),
                "auth_user" => auth()->user()->nom_complet,
                "authuserid" => auth()->user()->id,
                // "utype" => auth()->user()->utype_id
            ]);
        } else {
            return view('accueil');
        }
    }
}