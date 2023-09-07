<?php
use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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





Route::get('/', function () {
    return redirect('/home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/form', function () {
    return view('form');
});

Route::post('/traiter-formulaire', function (Request $request) {
    $nom = $request->input('nom');
    $prenom = $request->input('prenom');
    $email = $request->input('email');
    $telephone = $request->input('telephone');
    $message = $request->input('message');

    return view('formdata', compact('nom', 'prenom', 'email', 'telephone', 'message'));
})->name('traiter-formulaire');


