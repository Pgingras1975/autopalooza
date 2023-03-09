<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
        /**
     * Affiche la page des conversations de l'usager connecté
     */
    public function admin() {
        return view('admin.dashboard', [
            //  "conversations" => Conversation::where('user_id' , '=', auth()->user()->id )->orderByDesc('created_at')->get()
        ]);
    }
}
