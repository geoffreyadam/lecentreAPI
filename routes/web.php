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
Route::get('public/test', 'ArticleController@test');
Route::get('bonjour', 'ArticleController@bonjour');

Route::get('/backOffice', 'BackOffice\AdminController@index');
Route::get('/backOffice/evenements', 'BackOffice\EvenementController@index');
Route::post('/backOffice/add/evenements', 'BackOffice\EvenementController@add');
