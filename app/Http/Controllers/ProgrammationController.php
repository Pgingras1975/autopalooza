<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgrammationController extends Controller
{
    /**
     * Affiche la page programmation
     *
     * @return void
     */
    public function afficherProgrammation(){
        return view('programmation');
    }
}
