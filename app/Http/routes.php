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

Route::get('/', function () { return view('welcome'); });
Route::get('sluzby/pravnicke-osoby', function () { return view('practice-areas_legal_companies'); });
Route::get('sluzby/fyzicke-osoby', function () { return view('practice-areas_persons'); });
Route::get('sluzby/doplnkove-sluzby', function () { return view('practice-areas_extras'); });
Route::get('sluzby/vymahaci-proces', function () { return view('vymahaci-proces'); });
Route::get('eticky-kodex', function () { return view('eticky-kodex'); });
Route::get('referencie', function () { return view('testimonials'); });
Route::get('kontakt', function () { return view('contact2'); });
