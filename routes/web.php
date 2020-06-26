<?php

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
Route::get('/', 'ArticleController@index');
Route::get('/backOffice', 'BackOffice\AdminController@index');
Route::get('/backOffice/evenements', 'BackOffice\EvenementController@index');
Route::get('/backOffice/add/evenement', 'BackOffice\EvenementController@addIndex');
Route::get('/backOffice/update/evenement/{id}', 'BackOffice\EvenementController@updateIndex');
Route::post('/backOffice/updateFunction/evenement/{id}', 'BackOffice\EvenementController@update');
Route::post('/backOffice/addFunction/evenement', 'BackOffice\EvenementController@add');

Route::get('/backOffice/contacts/', 'BackOffice\ContactsController@index');
Route::get('/backOffice/newsletter/', 'BackOffice\NewsletterController@index');
Route::get('/backOffice/newsletter/export', 'BackOffice\NewsletterController@export');

Route::get('/backOffice/infos/', 'BackOffice\InfosController@index');
Route::get('/backOffice/add/infos', 'BackOffice\InfosController@addIndex');
Route::get('/backOffice/update/infos/{id}', 'BackOffice\InfosController@updateIndex');
Route::post('/backOffice/updateFunction/infos/{id}', 'BackOffice\InfosController@update');
Route::post('/backOffice/addFunction/infos', 'BackOffice\InfosController@add');

Route::get('/backOffice/tarifs/', 'BackOffice\TarifsController@index');
Route::get('/backOffice/add/tarifs', 'BackOffice\TarifsController@addIndex');
Route::get('/backOffice/update/tarifs/{id}', 'BackOffice\TarifsController@updateIndex');
Route::post('/backOffice/updateFunction/tarifs/{id}', 'BackOffice\TarifsController@update');
Route::post('/backOffice/addFunction/tarifs', 'BackOffice\TarifsController@add');

Route::get('/backOffice/reservations', 'BackOffice\ReservationsController@index');
Route::get('/backOffice/update/reservations/{id}', 'BackOffice\ReservationsController@updateIndex');
Route::post('/backOffice/updateFunction/reservations/{id}', 'BackOffice\ReservationsController@update');
