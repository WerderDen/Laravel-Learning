<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/getDocumentRoot', function () {
    return $_SERVER['DOCUMENT_ROOT'];
});

Route::get('/getRandomNumber', function () {
    return random_int(0,1001);
});
