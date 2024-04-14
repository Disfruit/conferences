<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ConferencesController;


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
Route::get('/table', function () {
    return view('home.table');
})->name('table');
Route::get('/', function () {
    return view('home.welcome');
})->name('home');

Route::resource('conferences', ConferencesController::class)->only([
    'index',
    'show',
    'create',
    'store',
    'edit',
    'update',
    'destroy'
]);
