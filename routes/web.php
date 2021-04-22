<?php

use App\Http\Controllers\BatimentsController;
use App\Http\Controllers\ElevesController;
use App\Http\Controllers\FormationsController;
use App\Http\Controllers\TypeofformationsController;
use App\Models\Typeofformation;
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

Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::get('/page/batiments', [BatimentsController::class, 'index'])->name('batiments.all');

Route::get('/page/formations', [FormationsController::class, 'index'])->name('formations.all');

Route::geT('/page/typeofformations', [TypeofformationsController::class, 'index'])->name('typeforms.all');

Route::get('/page/eleves', [ElevesController::class, 'index'])->name('eleves.all');