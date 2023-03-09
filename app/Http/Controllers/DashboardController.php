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
        return view('admin.dashboard', [
            //  "conversations" => Conversation::where('user_id' , '=', auth()->user()->id )->orderByDesc('created_at')->get()
             "usagers" => User::orderByDesc('utype_id')->get(),
             "reservations" => Reservation::all(),
             "actualites" => Actualite::all(),
             "activites" => Activite::all(),
             "forfaits" => Forfait::all(),
             "us" => auth()->user()->nom_complet
        ]);
    }
}
