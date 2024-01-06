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

Route::get('/getDocumentRoot', [\App\Http\Controllers\MyPlaceController::class, 'indexDocumentRoot']);

Route::get('/getRandomNumber', [\App\Http\Controllers\MyNumberController::class, 'indexRandomNumber']);
