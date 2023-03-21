<?php

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/who-we-are', [App\Http\Controllers\HomeController::class, 'who_we_are'])->name('who-we-are');
Route::get('/our-history', [App\Http\Controllers\HomeController::class, 'our_history'])->name('our-history');
Route::get('/contact-us', [App\Http\Controllers\HomeController::class, 'contact_us'])->name('contact-us');

Route::group(['prefix'=>'front','as'=>'front.'], function(){
   Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
   Route::get('/who-we-are', [App\Http\Controllers\HomeController::class, 'who_we_are'])->name('who-we-are');
   Route::get('/our-history', [App\Http\Controllers\HomeController::class, 'our_history'])->name('our-history');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
