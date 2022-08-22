<?php

use App\Http\Controllers\addMemberController;
use App\Http\Controllers\HomeController;
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

Route::get('/',[HomeController::class,'ShowHomePage'])->name('home');

Route::get('/addmember',[addMemberController::class,'addMembers'])->name('addMember');

//Ajoute des membres
Route::get('/addmembers',[addMemberController::class,'addMember']);
Route::delete('/crud/{id}/delete',[HomeController::class,'destroy']);

Route::get('/femme',[HomeController::class,'ShowHomePage'])->name('femme');
Route::get('/homme',[HomeController::class,'ShowHomePage'])->name('homme');
Route::get('/all',[HomeController::class,'ShowHomePage'])->name('all');
