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
Route::post('/backOffice/addFunction/evenement/{id}', 'BackOffice\EvenementController@add');
