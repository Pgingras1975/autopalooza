<?php

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

// Accueil
Route::get('/', [AccueilController::class, 'index'])
    ->name('accueil');

// Forfaits
Route::get('/forfaits', [ForfaitController::class, 'afficherForfait'])
    ->name('forfaits');

// Activités
Route::get('/activites', [ActiviteController::class, 'afficherActivite'])
->name('contacts');

// Contact
Route::get('/contact', [ContactController::class, 'afficherContact'])
->name('contacts');
