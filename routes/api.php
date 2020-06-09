<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('/login','AuthController@login');
Route::middleware('auth:api')->post('/logout', 'AuthController@logout');
Route::middleware('auth:api')->post('/events', 'EventsController@store');
Route::middleware('auth:api')->delete('/events/{event}', 'EventsController@destroy');
Route::middleware('auth:api')->patch('/events/{event}', 'EventsController@update');
Route::middleware('auth:api')->delete('/images/{image}', 'ImageController@destroy');

Route::get('/subpages/{page}', 'PageController@subPages');
Route::get('/pelements/page/{page}', 'PageController@elements');
Route::get('/pelements','PelementController@index');
Route::patch('/pelements/{pelement}','PelementController@update');

Route::get('/images','ImageController@index');
Route::post('/images','ImageController@store');

Route::get('/pages','PageController@index');
Route::get('/events','EventsController@index');
