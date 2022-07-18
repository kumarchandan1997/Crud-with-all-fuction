<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

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


Route::get('/create',[FormController::class,'create']);
Route::post('store',[FormController::class,'store']);
Route::get('/',[FormController::class,'index']);
Route::get('/edit/{id}',[FormController::class,'edit'])->name('customer.edit');
Route::post('/update/{id}',[FormController::class,'update'])->name('customer.update');
Route::get('/show/{id}',[FormController::class,'show'])->name('customer.show');
Route::delete('/delete/{id}',[FormController::class,'delete'])->name('customer.delete');

