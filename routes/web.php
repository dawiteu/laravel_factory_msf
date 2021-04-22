<?php

use App\Http\Controllers\BatimentsController;
use App\Http\Controllers\ElevesController;
use App\Http\Controllers\FormationsController;
use App\Http\Controllers\FrontController;
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


//font 

Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::get('/page/batiments', [FrontController::class, 'batiment'])->name('batiments.all');

Route::get('/page/formations', [FrontController::class, 'formations'])->name('formations.all');

Route::geT('/page/typeofformations', [FrontController::class, 'typeformations'])->name('typeforms.all');

Route::get('/page/eleves', [FrontController::class, 'eleves'])->name('eleves.all');

route::get('/admin', function(){
    return view('admin.index');
})->name('admin.index');


//back


// batiments 
route::get('/admin/bat/all', [BatimentsController::class,'index'])->name('admin.bat.all'); 

route::get('admin/bat/add', [BatimentsController::class,'create'])->name('admin.bat.add');
route::post('/admin/bat/add2',[BatimentsController::class,'store'])->name('admin.bat.store');

route::get('/admin/bat/show/{id}', [BatimentsController::class,'show'])->name('admin.bat.show'); 
route::get('/admin/bat/edit/{id}', [BatimentsController::class,'edit'])->name('admin.bat.edit'); 
route::put('/admin/bat/update/{id}', [BatimentsController::class,'update'])->name('admin.bat.update');
Route::delete('/admin/bat/del/{id}', [BatimentsController::class,'destroy'])->name('admin.bat.del');



route::get('/admin/form/all', [FormationsController::class,'index'])->name('admin.form.all'); 

route::get('admin/form/add', [FormationsController::class,'create'])->name('admin.form.add');
route::post('/admin/form/add2',[FormationsController::class,'store'])->name('admin.form.store');

route::get('/admin/form/show/{id}', [FormationsController::class,'show'])->name('admin.form.show'); 
route::get('/admin/form/edit/{id}', [FormationsController::class,'edit'])->name('admin.form.edit'); 
route::put('/admin/form/update/{id}', [FormationsController::class,'update'])->name('admin.form.update');
Route::delete('/admin/form/del/{id}', [FormationsController::class,'destroy'])->name('admin.form.del');


