<?php

use App\Http\Controllers\TinController;
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

Route::get('/',[TinController::class , 'index']);

Route::get('/detail/{id}',[TinController::class , 'show']);
Route::get('/new/{id}',[TinController::class , 'new']);
Route::get('/search',[TinController::class , 'search']);