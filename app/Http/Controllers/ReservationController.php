<?php

namespace App\Http\Controllers;

use App\Models\Actualite;
use App\Models\Reservation;
use App\Models\Thematique;
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

        // protection de la route reservation/rechercher
        // redirige à l'accueil si l'utilisateur authentifié n'est pas un employé
        if (auth()->user()->utype_id == 1){
            return view('reservation.supprimer', [
                "reservation" => Reservation::join('users', 'reservations.user_id', '=', 'users.id')
                ->join('forfaits','reservations.forfait_id', 'forfaits.id')
                ->select('users.nom AS nom_de_famille', 'users.prenom', 'reservations.*', 'forfaits.nom AS nom_du_forfait',  'forfaits.date_arrivee', 'forfaits.date_depart')
                ->findOrFail($id),
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

        // protection de la route reservation/rechercher
        // redirige à l'accueil si l'utilisateur authentifié n'est pas un employé
        if (auth()->user()->utype_id == 1){
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
        } else {
            return view('accueil', [
                "actualites" => Actualite::orderByDesc('created_at')->get(),
                "thematiques" => Thematique::all()
            ]);
        }
    }
}
