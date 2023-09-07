<?php
use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/**
 * Route pour afficher le formulaire
 */
Route::get('/form', function () {
    return view('form');
});

/**
 * Route pour traiter le formulaire
 */
Route::post('/traiter-formulaire', [FormController::class, 'traiterFormulaire'])->name('traiter-formulaire');
