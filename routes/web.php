<?php

use App\Models\patient;

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
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\JointureController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\traitementController;
use App\Http\Controllers\HomepatientController;
use App\Http\Controllers\consultationController;
use App\Http\Controllers\OrdocontrollerController;
use Illuminate\Support\Facades\DB;

Route::view('/', 'welcome');
Auth::routes();

Route:: get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index') ->name('post.index');
// Route::get('/admin', 'Patient@index') ->name('patient.index');

Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm')->name('adminshow');
Route::post('/login/admin','Auth\LoginController@adminLogin');

Route::get('logout', [LoginController::class,'logout']);

Route::group(['middleware' => 'auth:admin'], function () {
    Route::view("/admin", 'admin');
});     
//-----------------------------------------------------------------------------
Route::group(['middleware' => 'auth:patient'], function () {
    Route::view('/patient', 'patient');
});

Route::post('/login/patient', [LoginController::class,'patientLogin']);
Route::post('/register/patient', [RegisterController::class,'createpatient']);
Route::get('/register/patient', [RegisterController::class,'showpatientRegisterForm']);
Route::get('/login/patient', [LoginController::class,'showpatientLoginForm']);

//----------------------------------------------------------------------------------
//Medecin
Route::get('/ajouter/post', 'HomeController@ajouter') ->name('post.ajouter');
Route::post('/add/post', 'HomeController@add') ->name('post.add');
Route::get('/edit/post/{id}', 'HomeController@edit') ->name('post.edit');
Route::put('/update/post/{id}', 'HomeController@update') ->name('post.update');
Route::get('/delete/{id}', 'HomeController@delete') ->name('post.delete');

// Route::get('show/patient/{id}',function($id){
//     $patient = patient::findOrFail($id);
//     return view('patient',$patient);
// })->name('patient.show');

Route::get('/ajouter/att', [PatientController::class , 'patientadd']) ->name('ajouter');
Route::get('/ajouter/att', [PatientController::class , 'showname']) ->name('ajouter');


Route::get('/admin/ll', [PatientController::class , 'index']) ->name('patient.indexPatient');
Route::get('/admin', [PatientController::class , 'showname'])->name('show');
//  
// Route::get('/patient', [PatientController::class , 'indexpa'])->name('patient.indexpa');;

// Route::get('/patient', [PatientController::class , 'index1']) ->name('patient.indexPatient1');
//
Route::post('/admin/add',[PatientController::class , 'addp']) ->name('add');

Route::get('/dossier/show/{id}',[PatientController::class , 'show']) ->name('patient.show');

// Route::get('/dossier/show/{id}',[PatientController::class , 'show']) ->name('patient.xx');


Route::get('/deledt/{id}',[PatientController::class , 'delete']) ->name('delete');


Route::get('/dossier/show/{num_dossier}',[PatientController::class , 'show']) ->name('patient.show');



//Jointure  

Route::post('/showJointure', [JointureController::class , 'addJointure']) ->name('Jointur.addJointure');
Route::get('/showJointure',  [JointureController::class , 'indexJointure']) ->name('Jointur.index');
Route::get('/Jointure/add', [JointureController::class , 'Jointureadd']) ->name('Jointureadd');
Route::get('/ordonnanc/show/{ordonnanc}', [JointureController::class , 'ordonnanc']) ->name('ordonnanc.show');
Route::get('/edit/Jointure/{id}', [JointureController::class,'editJointure']) ->name('Jointure.edit');
Route::put('/update/Jointure/{id}', [JointureController::class,'updateJointure']) ->name('Jointure.update');
Route::get('/delete/Jointure/{id}', [JointureController::class,'deleteJointure']) ->name('Jointure.delete');

//consulatation


Route::get('/ajoutercons', [consultationController::class , 'consu']) ->name('ajouterconsu');
Route::post('/ajoutercons/add',  [consultationController::class , 'addcon']) ->name('consultation.add');
Route::get('/patient',  [consultationController::class , 'consultationpatient']) ->name('consultation.show');
Route::get('/ajoutercons/consultation',[consultationController::class , 'consultationindex'])->name('consultation.index');

//tratement
// Route::post('/admin', [traitementController::class , 'addtr']) ->name('Traitement.addaddtr');
Route::get('/ajouter',  [traitementController::class , 'indextr']) ->name('Traitement.index');
Route::get('/delete/traitement/{id}', [traitementController::class,'deletetr']) ->name('traitement.delete');

//orodo
Route::post('/showordonence', [OrdocontrollerController::class , 'addordonence']) ->name('ordonence.addordonence');
Route::get('/showordonence',  [OrdocontrollerController::class , 'indexordonence']) ->name('ordonence.index');

Route::get('/approved/{id}',  'consultationController@approvedin') ->name('approved');
Route::get('/notapproved/{id}',  'consultationController@notapprovedin') ->name('notapproved');


Route::get('/ordonence/add', [OrdocontrollerController::class , 'ordonenceadd']) ->name('ordonenceadd');
Route::get('/ordonence/show/{ordonnanc}', [OrdocontrollerController::class , 'ordonnanc']) ->name('ordonnanc.show');
Route::get('/delete/ordonnanc/{id}', [OrdocontrollerController::class,'Dordonence']) ->name('ordonnanc.delete');



// Route::get('/showordonence',  [OrdocontrollerController::class , 'indextr2']) ->name('ordonence.index2');

Route::get('/downloadPDF/{id}','OrdocontrollerController@downloadPDF')->name('pdf');


// Route::get('/patient','PatientController@index');
// Route::get('/patient/ge','PatientController@storeSessionData');
// Route::get('/patient/rem','PatientController@deleteSessionData');

















