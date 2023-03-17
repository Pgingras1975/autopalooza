<?php

namespace App\Http\Controllers;

use App\Models\Actualite;
use App\Models\Thematique;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AccueilController extends Controller
{
    /**
     * Affiche la page d'accueil incluant les actualités et les thématiques
     */
    public function index() {
        $date = Actualite::find(1);

        return view('accueil', [
            "actualites" => Actualite::orderByDesc('created_at')->get(),
            "thematiques" => Thematique::all()
        ]);
    }
}
