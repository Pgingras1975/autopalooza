<?php

use App\Http\Controllers\ActualiteController;
use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EnregistrementController;
use App\Http\Controllers\ReservationController;
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

Route::get('/admin', [DashboardController::class, 'admin'])->name('admin')->middleware('auth');

Route::get('/enregistrement', [EnregistrementController ::class, 'create'])->name('enregistrement');
Route::post('/enregistrement', [EnregistrementController::class, 'store']);

Route::get('/connexion', [ConnexionController::class, 'connexion'])->name('login');
Route::post('/connexion', [ConnexionController::class, 'authentifier']);

Route::get('/deconnexion', [ConnexionController::class, 'deconnecter']);

Route::get('/reservation/supprimer/{id}', [ReservationController::class, 'destroy']);

Route::get('/actualite/creer', [ActualiteController::class, 'create'])->name('creer-actualite');
Route::post('/actualite/sauvegarder', [ActualiteController::class, 'store']);

Route::get('/actualite/modifier/{id}', [ActualiteController::class, 'edit'])->name('modifier-actualite');
Route::post('/actualite/modifier/{id}', [ActualiteController::class, 'update']);

Route::get('/actualite/supprimer/{id}', [ActualiteController::class, 'destroy']);
