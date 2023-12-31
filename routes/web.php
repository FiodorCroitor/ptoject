<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaitController;

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

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/review' , [SaitController::class , 'review'])->name('review');
Route::post('/review/check' , [SaitController::class , 'review_check']);
