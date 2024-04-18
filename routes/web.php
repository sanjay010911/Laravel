<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\UC;
use App\Http\Controllers\FirstController;
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


// Route::get('/home',[AuthManager::class,'home']);
// Route::get('/login',[AuthManager::class,'login']);
// Route::post('/loginpost',[AuthManager::class,'loginpost']);
// Route::get('/reg',[AuthManager::class,'reg']);
// Route::post('/reg',[AuthManager::class,'regpost']);





Route::get('/login',[UC::class,'login']);
Route::get('/logout',[UC::class,'logout']);
Route::get('/home/{id}',[UC::class,'home']);
Route::post('/loginpost',[UC::class,'loginpost']);
Route::get('/reg',[UC::class,'reg']);
Route::post('/regpost',[UC::class,'regpost']);
Route::get('/edit/{id}',[UC::class,'edit']);
Route::post('/update/{id}',[UC::class,'update']);
Route::get('/showtodo/{id}',[UC::class,'showtodo']);
Route::post('/instodo/{id}',[UC::class,'instodo']);
Route::get('/etodo/{id}',[UC::class,'etodo']);
Route::post('/etodo/update/{id}',[UC::class,'utodo']);
Route::get('/dtodo/{id}',[UC::class,'dtodo']);

