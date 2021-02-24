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

// Route::get('/', function () {
//     return view('welcomer');
//     // return 'Hendrick';
// });
// Route::get('/test', 'TestController@index');
// Route::get('/testaja', 'TestController@testAja');

// Route::resource('photos', PhotoController::class);
// Route::resource('photos', 'PhotoController')->only([
//     'index', 'show'
// ]);
Route::resource('photos', 'PhotoController')->except([
    'create', 'store', 'update', 'destroy'
]);


