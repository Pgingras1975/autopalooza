<?php

use App\Http\Controllers\ActualiteController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EnregistrementController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\ActiviteController;
use App\Http\Controllers\ApiEnregistrementController;
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

Route::get('/enregistrement', [EnregistrementController ::class, 'create'])->name('enregistrement');
Route::post('/enregistrement', [EnregistrementController::class, 'store']);


// Route formulaires admin Employés
Route::get('/employe/creer', [EmployeController ::class, 'create'])->name('creer-employe')->middleware('auth');
Route::post('/employe/creer', [EmployeController::class, 'store'])->middleware('auth');

Route::get('/employe/modifier/{id}', [EmployeController::class, 'edit'])->name('modifier-employe')->middleware('auth');
Route::post('/employe/modifier/{id}', [EmployeController::class, 'update'])->middleware('auth');

Route::get('/employe/modifier/pwd/{id}', [EmployeController::class, 'editPwd'])->name('modifier-employe-pwd')->middleware('auth');
Route::post('/employe/modifier/pwd/{id}', [EmployeController::class, 'updatePwd'])->middleware('auth');

Route::delete('/employe/supprimer/{id}', [EmployeController::class, 'destroy'])->name('employe.delete')->middleware('auth');

// Route formulaires admin Clients
Route::get('/client/modifier/{id}', [ClientController::class, 'edit'])->name('modifier-client')->middleware('auth');
Route::post('/client/modifier/{id}', [ClientController::class, 'update'])->middleware('auth');

Route::get('/client/rechercher', [ClientController::class, 'rechercherClient'])->middleware('auth');

Route::delete('/client/supprimer/{id}', [ClientController::class, 'destroy'])->name('client.delete')->middleware('auth');

// Route connexion
Route::get('/connexion', [ConnexionController::class, 'connexion'])->name('login');
Route::post('/connexion', [ConnexionController::class, 'authentifier']);

Route::get('/deconnexion', [ConnexionController::class, 'deconnecter'])->name('deconnexion');

Route::get('/reservation/rechercher', [ReservationController::class, 'rechercherReservation'])->middleware('auth');
Route::get('/reservation/modifier/{id}', [ReservationController::class, 'edit'])->name('modifier-reservation')->middleware('auth');

Route::delete('/reservation/supprimer/{id}', [ReservationController::class, 'destroy'])->name('reservation.delete')->middleware('auth');


// Route actualité
Route::get('/actualite/creer', [ActualiteController::class, 'create'])->name('creer-actualite');
Route::post('/actualite/creer', [ActualiteController::class, 'store']);

Route::get('/actualite/modifier/{id}', [ActualiteController::class, 'edit'])->name('modifier-actualite');
Route::post('/actualite/modifier/{id}', [ActualiteController::class, 'update']);

Route::delete('/actualite/supprimer/{id}', [ActualiteController::class, 'destroy'])->name('actualite.delete')->middleware('auth');

// Route activité
Route::get('/activite/creer', [ActiviteController::class, 'create'])->name('creer-activite')->middleware('auth');
Route::post('/activite/creer', [ActiviteController::class, 'store']);

Route::get('/activite/modifier/{id}', [ActiviteController::class, 'edit'])->name('modifier-activite')->middleware('auth');
Route::post('/activite/modifier/{id}', [ActiviteController::class, 'update']);

Route::delete('/activite/supprimer/{id}', [ActiviteController::class, 'destroy'])->name('activite.delete')->middleware('auth');

// Route forfait
Route::get('/forfait/creer', [ForfaitController::class, 'create'])->name('creer-forfait')->middleware('auth');
Route::post('/forfait/creer', [ForfaitController::class, 'store']);

Route::get('/forfait/modifier/{id}', [ForfaitController::class, 'edit'])->name('modifier-forfait')->middleware('auth');
Route::post('/forfait/modifier/{id}', [ForfaitController::class, 'update']);

Route::delete('/forfait/supprimer/{id}', [ForfaitController::class, 'destroy'])->name('forfait.delete')->middleware('auth');


//Accueil
Route::get('/', [AccueilController::class, 'index'])->name('accueil');

// Forfaits
Route::get('/forfaits', [ForfaitController::class, 'afficherForfait'])->name('forfaits');

// Activités
Route::get('/activites', [ActiviteController::class, 'afficherActivite'])->name('activites');

// Contact
Route::get('/contact', [ContactController::class, 'afficherContact'])->name('contacts');

// Réservation
Route::get('/reservation', [ReservationController::class, 'reserver'])->name('reservation')->middleware('auth');

// API Réservation
Route::post('api/enregistrement', [ApiEnregistrementController::class, 'store'])->middleware('auth');
