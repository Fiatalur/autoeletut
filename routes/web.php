<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\aktualis;
use App\Http\Controllers\auto;
use App\Http\Controllers\tulajdonos;
use App\Http\Controllers\baleset;

/*Route::get('/aktualis');
Route::get('/auto');
Route::get('/tulajdonos');
*/
Route::get('/', function () {
    return view('welcome');
});
Route::get('/auto', function () {
    return view('auto');
});
Route::get('/tulajdonos', function () {
    return view('tulajdonos');
});

Route::get('/baleset', function () {
    return view('baleset');
});