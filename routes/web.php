<?php

use Illuminate\Support\Facades\Auth;

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
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

Route::view('/', 'welcome');
Auth::routes();

Route:: get('/home', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@index') ->name('post.index');

Route::get('/admin', 'Patient@index') ->name('patient.index');

Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm')->name('adminshow');

Route::post('/login/admin','Auth\LoginController@adminLogin');

Route::get('logout', [LoginController::class,'logout']);

Route::group(['middleware' => 'auth:admin'], function () {
    Route::view('/admin', 'admin');
});     

Route::get('/ajouter/post', 'HomeController@ajouter') ->name('post.ajouter');

Route::post('/add/post', 'HomeController@add') ->name('post.add');

Route::get('/edit/post/{id}', 'HomeController@edit') ->name('post.edit');

Route::put('/update/post/{id}', 'HomeController@update') ->name('post.update');

Route::get('/delete/post/{id}', 'HomeController@delete') ->name('post.delete');

//

Route::get('/ajouter', 'PatientController@patientadd') ->name('ajouter');
Route::get('/admin', 'PatientController@index') ->name('index');
Route::post('/admin/add', 'PatientController@addp') ->name('add');

Route::post('/admin/show', 'PatientController@showpatient') ->name('show');









