<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\Job;
use Illuminate\Http\Request;

/**
 * Display All actividades
 */


Route::post('/', 'JobController@store');
Route::post('/corporation', 'CorporationController@store');
//Route::resource('/job', 'JobController');

Route::get('/', function () {
    // esta funcion permite devolver una vista
    return view('jobs');
});

/**
 * Delete An Existing Task
 */
Route::delete('/job/{id}', function ($id) {
    //
});
