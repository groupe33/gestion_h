<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\authController;
use App\Http\Controllers\MedecinController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;


// use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PatientsController;
use App\Http\Controllers\AdminController;
// use Illuminate\Routing\Route as RoutingRoute;

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
    return view('back_end.home');
});

Route::get('/administrateur',[HomeController::class,'dasboardAdministrateur']);
Route::get('/medecin',[HomeController::class,'dasboardMedecins']);
Route::get('/patient',[HomeController::class,'dasboardPatients']);






Route::prefix('back_end')->name('back_end.')->group(function () {

    Route::resource('patients',PatientsController::class);
    Route::resource('medecins',MedecinController::class);
    Route::resource('admins',AdminController::class);
    Route::resource('services',ServiceController::class);

});
Route::get('/rechercheService', [ServiceController::class, 'rechercheService'])->name('rechercheService');
Route::get('/editService/{service_id}', [ServiceController::class, 'edit'])->name('editService');
Route::get('/serviceUpdate/{service_id}', [ServiceController::class, 'update'])->name('serviceUpdate');

// Route::get('/service',[serviceController::class,'index'])->name('service');
// Route::get('/serviceCreate',[serviceController::class,'create'])->name('serviceCreate');
// Route::post('/serviceStore',[serviceController::class,'store'])->name('serviceStore');
// Route::get('/serviceShow/{id}',[serviceController::class,'show'])->name('serviceShow');



// Route::prefix('patients')->name('patients.')->group(function () {
//     // Routes liées aux patients
//     Route::get('/', [PatientController::class,'index'])->name('index');
//     Route::get('/profil' ,[PatientController::class,'show'])->name('profil');
//     Route::get('/create', [PatientController::class,'create'])->name('create');
//     Route::post('/store', [PatientController::class,'store'])->name('store');
//     Route::get('/edit/{id}', [PatientController::class,'edit'])->name('edit');
//     Route::put('/update/{id}', [PatientController::class,'update'])->name('update');
//     Route::delete('/delete/{id}', [PatientController::class,'destroy'])->name('destroy');
// });

// Route::prefix('medecin')->name('medecin.')->group(function () {
//     // Routes liées aux medecin
//     Route::get('/', [medecinController::class,'index'])->name('index');
//     Route::get('/{id}', [medecinController::class,'show'])->name('show');
//     Route::get('/create', [medecinController::class,'create'])->name('create');
//     Route::post('/store', [medecinController::class,'store'])->name('store');
//     Route::get('/edit/{id}', [medecinController::class,'edit'])->name('edit');
//     Route::put('/update/{id}', [medecinController::class,'update'])->name('update');
//     Route::put('/update/{id}', [medecinController::class,'update'])->name('horaire');
//     Route::delete('/delete/{id}', [medecinController::class,'destroy'])->name('destroy');
// });

// Route::prefix('actualites')->name('actualites.')->group(function () {
//     // Routes liées aux actualites
//     Route::get('/', [PatientController::class,'index'])->name('index');
//     Route::get('/{id}', [PatientController::class,'show'])->name('show');
//     Route::get('/create', [PatientController::class,'create'])->name('create');
//     Route::post('/store', [PatientController::class,'store'])->name('store');
//     Route::get('/edit/{id}', [PatientController::class,'edit'])->name('edit');
//     Route::put('/update/{id}', [PatientController::class,'update'])->name('update');
//     Route::delete('/delete/{id}', [PatientController::class,'destroy'])->name('destroy');
// });

// Route::prefix('rendezVous')->name('rendezVous.')->group(function () {
//     // Routes liées aux rendez-vous
//     Route::get('/', [rendezVousController::class,'index'])->name('index');
//     Route::get('/{id}', [rendezVousController::class,'show'])->name('show');
//     Route::get('/create', [rendezVousController::class,'create'])->name('create');
//     Route::post('/store', [rendezVousController::class,'store'])->name('store');
//     Route::get('/edit/{id}', [rendezVousController::class,'edit'])->name('edit');
//     Route::put('/update/{id}', [rendezVousController::class,'update'])->name('update');
//     Route::delete('/delete/{id}', [rendezVousController::class,'destroy'])->name('destroy');
// });






