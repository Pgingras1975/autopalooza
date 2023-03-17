<?php

namespace App\Http\Controllers;

use App\Models\Forfait;
use Illuminate\Http\Request;

class ApiRecuperationController extends Controller
{
        /**
     * Retourne tous les forfaits
     *
     * @param Request $request
     */
    public function index()
    {
        $forfaits_liste =  Forfait::all();

        $forfait_possible = $forfaits_liste->filter(function($forfait){
            return true;
        });

        return $forfait_possible;
        // return Mot::all()->filter(
        //     fn($word) => Str::contains($word->furigana, $request->caractere)
        // );
    }
}
