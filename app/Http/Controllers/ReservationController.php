<?php

namespace App\Http\Controllers;

use App\Models\Activite;
use App\Models\Actualite;
use App\Models\Forfait;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Affiche la vue de réservation
     *
     *
     */
    public function reserver() {
        return view('reservation', [

        ]);
    }
    /**
     * Supprime un fait selon son id
     *
     * @param int $id id du fait
     */
    public function destroy($id){

        $fait = Reservation::findOrFail($id);

        $fait->delete();

        return redirect()
                ->route('admin')
                ->with('suppression-Reservation', 'La réservation a été supprimée!');
    }

    /**
     * affiche une liste de réservation dont le nom correspond au mot recherché
     *
     * @return void
     */
    public function rechercherReservation(Request $request) {

        return view('admin.dashboard', [
            "employes" => User::where('id', '>', 1 )->where('utype_id', '=', 1 )->orderBy('nom')->get(),
            "clients" => User::where('utype_id', '=', 2 )->orderBy('nom')->get(),
            "reservations" => User::join('reservations', 'users.id', '=', 'reservations.user_id')
                                ->select('users.nom', 'reservations.*')
                                ->where('nom', 'LIKE', '%' . $request->search . '%' )->orderBy('nom')->get(),
            "actualites" => Actualite::all(),
            "activites" => Activite::all(),
            "forfaits" => Forfait::all(),
            "auth_user" => auth()->user()->nom_complet,
            "authuserid" => auth()->user()->id,
        ]);
    }
}
