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
            "forfaits" => Forfait::all()
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
}
