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
            "forfaits" => Forfait::all()
        ]);
    }

    /**
     * Affiche le formulaire d'enregistrement (création de compte)
     *
     */
    public function edit($id) {
        return view('reservation.supprimer', [
            // "reservation" => Reservation::findOrFail($id),
            "reservation" => Reservation::join('users', 'reservations.user_id', '=', 'users.id')
            ->join('forfaits','reservations.forfait_id', 'forfaits.id')
            ->select('users.nom AS nom_de_famille', 'users.prenom', 'reservations.*', 'forfaits.nom AS nom_du_forfait')
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
     * @return void
     */
    public function rechercherReservation(Request $request) {

        return view('reservation.resultat_recherche', [
            // "employes" => User::where('id', '>', 1 )->where('utype_id', '=', 1 )->orderBy('nom')->get(),
            // "clients" => User::where('utype_id', '=', 2 )->orderBy('nom')->get(),
            "reservations" => Reservation::join('users', 'reservations.user_id', '=', 'users.id')
                ->join('forfaits','reservations.forfait_id', 'forfaits.id')
                ->select('users.*', 'reservations.*', 'forfaits.nom AS nom_du_forfait')
                ->where('users.nom', 'LIKE', '%' . $request->search . '%' )
                ->orderBy('nom')->get(),
            // "actualites" => Actualite::all(),
            // "activites" => Activite::all(),
            // "forfaits" => Forfait::all(),
            "authuser" => auth()->user()->nom_complet,
            "authuserid" => auth()->user()->id,
        ]);
    }
}
