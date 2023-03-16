<?php

namespace App\Http\Controllers;

use App\Models\Actualite;
use Illuminate\Http\Request;

class AccueilController extends Controller
{
    /**
     * Affiche la page accueil
     */
    public function index() {
        return view('accueil', [
            "actualites" => Actualite::all()
        ]);
    }
}
