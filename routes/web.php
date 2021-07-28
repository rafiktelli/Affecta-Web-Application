<?php

use App\Http\Controllers\CursusController;
use App\Http\Controllers\scolariteController;
use  App\Http\Controllers\loginController;
use  App\Http\Controllers\choixController;
use Illuminate\Support\Facades\Request;
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

Route::get('/', function () {
    return view('login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia\Inertia::render('Dashboard');
})->name('dashboard');
//
Route::get('effectuer-classement',[CursusController::class,'importForm']);
Route::post('effectuer-classement',[CursusController::class,'uploadFile'])->name('fileUploaded');
//
Route::get('afficher-classement',[CursusController::class,'rankForm']);
Route::post('afficher-classement',[CursusController::class,'doRank'])->name('rankDone');
Route::get('/excel', [cursusController::class,'downloadFile'])->name('export_excel.excel');
Route::get('/excel1', [choixController::class,'downloadFile'])->name('export_excel1.excel');

//
Route::post('scolarite',[scolariteController::class,'setYear'])->name('year');
Route::get('scolarite',[scolariteController::class,'scolariteForm']);
//
Route::get('login',[loginController::class,'loginForm']);
Route::post('login',[loginController::class,'index']);

Route::get('scolarite/place',[scolariteController::class,'placeForm']);

Route::get('/scolarite/utilisateurs',[scolariteController::class,'index']);

Route::get('/scolarite/place/{idOption}',[scolariteController::class,'getOptionById']);
Route::put('/scolarite/place',[scolariteController::class,'updateOption'])->name('option.modif');
Route::delete('/scolarite/place/{idOption}',[scolariteController::class,'deleteOption']);

Route::get('/scolarite/utilisateurs/{id_utilisateur}',[scolariteController::class,'getUtilisateurById']);
Route::put('/scolarite/utilisateurs',[scolariteController::class,'updateUtilisateur'])->name('utilisateur.modif');
Route::post('/scolarite/utilisateurs/ajouter',[scolariteController::class,'ajouterUtilisateur'])->name('utilisateur.ajout');
Route::delete('/scolarite/utilisateurs/{id_utilisateur}',[scolariteController::class,'deleteUtilisateur']);

////////////////////////////////////////////////////////////////////
Route::get('effectuer-affectation',[choixController::class,'importForm']);
Route::post('effectuer-affectation',[ChoixController::class,'uploadFile'])->name('choixUploaded');
Route::post('afficher-classement/dd',[ChoixController::class,'doAffect'])->name('affectDone');

Route::view('afficher-affectation','afficher-affectation');
/*****************************************************************/

Route::get('logout', function(){
    session()->forget('data');
    return redirect('login');
}
);

