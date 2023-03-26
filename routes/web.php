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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('homes');
Route::get('/who-we-are', [App\Http\Controllers\HomeController::class, 'who_we_are'])->name('who-we-are');
Route::get('/who-we-are/explore', [App\Http\Controllers\HomeController::class, 'explore'])->name('explore');
Route::get('/our-history', [App\Http\Controllers\HomeController::class, 'our_history'])->name('our-history');
Route::get('/contact-us', [App\Http\Controllers\HomeController::class, 'contact_us'])->name('contact-us');



Auth::routes();

Route::group(['prefix'=>'admin','as'=>'admin'], function(){
   Route::get('/', [App\Http\Controllers\AdminsController::class, 'index'])->name('admin.index')->middleware('is_admin');
   Route::get('/addLeadership', [App\Http\Controllers\AdminsController::class, 'addLeadership'])->name('admin.addLeadership')->middleware('is_admin');
   Route::post('/add_Leadership', [App\Http\Controllers\AdminsController::class, 'add_Leadership'])->name('admin.add_Leadership')->middleware('is_admin');
   Route::get('/leaderships', [App\Http\Controllers\AdminsController::class, 'leaderships'])->name('admin.leaderships')->middleware('is_admin');
   Route::get('/deleteLeadership/{id}', [App\Http\Controllers\AdminsController::class, 'deleteLeadership'])->name('admin.deleteLeadership')->middleware('is_admin');
   Route::get('/editLeadership/{id}', [App\Http\Controllers\AdminsController::class, 'editLeadership'])->name('admin.editLeadership')->middleware('is_admin');
   Route::post('/edit_Leadership/{id}', [App\Http\Controllers\AdminsController::class, 'edit_Leadership'])->name('admin.edit_Leadership')->middleware('is_admin');
});

Route::group(['prefix'=>'members','as'=>'members'], function(){
    Route::get('/', [App\Http\Controllers\MembersController::class, 'index'])->name('members.index')->middleware('is_admin');
});
