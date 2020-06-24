<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Article;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('evenements/{token}', 'BackOffice\EvenementController@apiGetAll');

Route::post('addContact/{token}', 'BackOffice\ContactsController@add');

Route::post('addNewsletter/{token}', 'BackOffice\newsLetterController@add');


// Route::get('articles/{token}', 'ArticleController@index');
// Route::get('postArticle/{token}', 'ArticleController@store');
// Route::get('articles/{article}', 'ArticleController@show');
// // Route::post('articles', 'ArticleController@store');
// Route::put('articles/{article}', 'ArticleController@update');
// Route::delete('articles/{article}', 'ArticleController@delete');a

