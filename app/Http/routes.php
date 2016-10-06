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

Route::get('/', function () {
    return view('home');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::get('/skills-competences', function () {
    return view('skills-competences');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/get-my-cv', function () {
    return view('get-my-cv');
});


