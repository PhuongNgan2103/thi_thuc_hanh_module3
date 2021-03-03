<?php

use App\Http\Controllers\AgencyController;
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

Route::get('/',[AgencyController::class,'index'])->name('agency.index');
Route::get('/create',[AgencyController::class,'create'])->name('agency.create');
Route::post('/create',[AgencyController::class,'store'])->name('agency.store');
Route::get('/edit/{id}',[AgencyController::class,'edit'])->name('agency.edit');
Route::post('/edit/{id}',[AgencyController::class,'update'])->name('agency.update');
Route::get('/delete/{id}',[AgencyController::class,'delete'])->name('agency.delete');
Route::get('/show/{id}', [AgencyController::class, 'show'])->name('agency.show');
