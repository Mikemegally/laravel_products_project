<?php

use App\Http\Controllers\ProductController;
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
Route::get('products',[ProductController::class,'index']);
Route::get('products/{id}',[ProductController::class,'show']);
Route::get('product/delete/{id}',[ProductController::class,'destroy']);
Route::get('product/edit/{id}',[ProductController::class, 'edit']);
Route::post('product/update/{id}',[ProductController::class,'update']);

Route::get('/', function () {
    return view('welcome');
});
