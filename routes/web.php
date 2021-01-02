<?php

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

Route::get('/', function() {
    //return view('welcome');
    return view('index');
});

Route::group(['prefix'=>'pc'], function() {
    Route::get('/', function() {
        return view('pc.index');
    });
    Route::get('/html5', function() {
        return view('pc.html5');
    });
    Route::get('/css3', function() {
        return view('pc.css3');
    });
    Route::get('/javascript', function() {
        return view('pc.javascript');
    });
});

Route::group(['prefix'=>'travel'], function() {
    Route::get('/', function() {
        return view('travel.index');
    });
});

Route::get('/welcome', function() {
    return view('welcome');
});
Route::get('/notes', function() {
    return view('notes');
});