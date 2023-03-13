<?php

use App\Http\Controllers\ActualiteController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EnregistrementController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\ActiviteController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ForfaitController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route principale connexion/admin
Route::get('/admin', [DashboardController::class, 'admin'])->name('admin')->middleware('auth');

Route::get('/enregistrement', [EnregistrementController ::class, 'create'])->name('enregistrement')->middleware('auth');
Route::post('/enregistrement', [EnregistrementController::class, 'store'])->middleware('auth');

Route::get('/employe/creer', [EmployeController ::class, 'create'])->name('creer-employe')->middleware('auth');
Route::post('/employe/sauvegarder', [EmployeController::class, 'store'])->middleware('auth');

Route::get('/employe/modifier/{id}', [EmployeController::class, 'edit'])->name('modifier-employe')->middleware('auth');
Route::post('/employe/modifier/{id}', [EmployeController::class, 'update'])->middleware('auth');

Route::get('/employe/supprimer/{id}', [EmployeController::class, 'destroy'])->middleware('auth');

Route::get('/client/modifier/{id}', [EmployeController::class, 'edit'])->name('modifier-employe')->middleware('auth');
Route::post('/client/modifier/{id}', [EmployeController::class, 'update'])->middleware('auth');

Route::get('/client/supprimer/{id}', [EmployeController::class, 'destroy'])->middleware('auth');


Route::get('/connexion', [ConnexionController::class, 'connexion'])->name('login');
Route::post('/connexion', [ConnexionController::class, 'authentifier']);

Route::get('/deconnexion', [ConnexionController::class, 'deconnecter']);

Route::get('/reservation/supprimer/{id}', [ReservationController::class, 'destroy']);

// Route actualité
Route::get('/actualite/creer', [ActualiteController::class, 'create'])->name('creer-actualite');
Route::post('/actualite/sauvegarder', [ActualiteController::class, 'store']);

Route::get('/actualite/modifier/{id}', [ActualiteController::class, 'edit'])->name('modifier-actualite');
Route::post('/actualite/modifier/{id}', [ActualiteController::class, 'update']);

Route::get('/actualite/supprimer/{id}', [ActualiteController::class, 'destroy']);

// Route activité
Route::get('/activite/creer', [ActiviteController::class, 'create'])->name('creer-activite');
Route::post('/activite/sauvegarder', [ActiviteController::class, 'store']);

Route::get('/activite/modifier/{id}', [ActiviteController::class, 'edit'])->name('modifier-activite');
Route::post('/activite/modifier/{id}', [ActiviteController::class, 'update']);

Route::get('/activite/supprimer/{id}', [ActiviteController::class, 'destroy']);

// Route forfait
Route::get('/forfait/creer', [ForfaitController::class, 'create'])->name('creer-forfait');
Route::post('/forfait/sauvegarder', [ForfaitController::class, 'store']);

Route::get('/forfait/modifier/{id}', [ForfaitController::class, 'edit'])->name('modifier-forfait');
Route::post('/forfait/modifier/{id}', [ForfaitController::class, 'update']);

Route::get('/forfait/supprimer/{id}', [ForfaitController::class, 'destroy']);



Route::get('/', [AccueilController::class, 'index'])
    ->name('accueil');

// Forfaits
Route::get('/forfaits', [ForfaitController::class, 'afficherForfait'])
    ->name('forfaits');

// Activités
Route::get('/activites', [ActiviteController::class, 'afficherActivite'])
->name('activites');

// Contact
Route::get('/contact', [ContactController::class, 'afficherContact'])
->name('contacts');

// Réservation
Route::get('/reservation', [ReservationController::class, 'reserver'])
->name('reservation')
->middleware('auth');
