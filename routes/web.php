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

//Route::get('/',  'App\Http\Controllers\PagesController@index');

Route::get('/MainPage', function () {
    return view('MainPage');
});

Route::get('/CSGO', function () {
    return view('CSGO');
});

Route::get('/VAL', function () {
    return view('VAL');
});

Route::get('/Dota2', function () {
    return view('Dota2');
});

Route::get('/Regis', function () {
    return view('Regis');
});

Route::get('/User/{id}', function ($id) {
    return view('User ID: '.$id);
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/comms', function () {
    return view('comms');
});

Route::get('/comment', function () {
    return view('comment');
});

Route::post('/add_comment', function () {
    return view('add_comment');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
