<?php

namespace App\Http\Controllers;

use App\Models\Forfait;
use App\Models\Reservation;
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
            "reservations" => Reservation::where('user_id', auth()->user()->id)->get(),
        ]);
    }

    /**
     * Affiche les information d'une réservation selon son id
     *
     * @param int $id id de la réservation
     */
    public function edit($id) {
        return view('reservation.supprimer', [
            "reservation" => Reservation::join('users', 'reservations.user_id', '=', 'users.id')
            ->join('forfaits','reservations.forfait_id', 'forfaits.id')
            ->select('users.nom AS nom_de_famille', 'users.prenom', 'reservations.*', 'forfaits.nom AS nom_du_forfait',  'forfaits.date_arrivee', 'forfaits.date_depart')
            ->findOrFail($id),
            "authuser" => auth()->user()->nom_complet,
            "authuserid" => auth()->user()->id,
        ]);

    }

    /**
     * Supprime un réservation selon son id
     *
     * @param int $id id de la réservation
     */
    public function destroy($id){

        $reservation = Reservation::findOrFail($id);

        $reservation->delete();

        return redirect()
                ->route('admin')
                ->with('suppression-Reservation', 'La réservation a été supprimée!');
    }

    /**
     * affiche une liste de réservation dont le nom correspond au mot recherché
     *
     * @param Request info de recherche
     */
    public function rechercherReservation(Request $request) {

        return view('reservation.resultat_recherche', [
            "reservations" => Reservation::join('users', 'reservations.user_id', '=', 'users.id')
                ->join('forfaits','reservations.forfait_id', 'forfaits.id')
                ->select('users.*', 'reservations.*', 'forfaits.nom AS nom_du_forfait',  'forfaits.date_arrivee', 'forfaits.date_depart')
                ->where('users.nom', 'LIKE', '%' . $request->search . '%' )
                ->orderBy('nom')->get(),
            "authuser" => auth()->user()->nom_complet,
            "authuserid" => auth()->user()->id,
            "search" => $request->search,
        ]);
    }
}
