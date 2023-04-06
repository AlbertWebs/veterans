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
Route::get('/regions', [App\Http\Controllers\HomeController::class, 'regions'])->name('regions');
Route::get('/press-releases', [App\Http\Controllers\HomeController::class, 'releases'])->name('press-releases');


Route::get('/veterans-register', [App\Http\Controllers\HomeController::class, 'register'])->name('register');
Route::post('/generate-membership-number', [App\Http\Controllers\HomeController::class, 'membership'])->name('membership-number');



Route::get('/privacy-policy', [App\Http\Controllers\HomeController::class, 'contact_us'])->name('contact-us');
Route::get('/terms-and-conditions', [App\Http\Controllers\HomeController::class, 'contact_us'])->name('contact-us');
Route::get('/copyright', [App\Http\Controllers\HomeController::class, 'contact_us'])->name('contact-us');



Auth::routes();

Route::group(['prefix'=>'admin'], function(){
   Route::get('/', [App\Http\Controllers\AdminsController::class, 'index'])->name('adminhome')->middleware('is_admin');
   Route::get('/addLeadership', [App\Http\Controllers\AdminsController::class, 'addLeadership'])->name('admin.addLeadership')->middleware('is_admin');
   Route::post('/add_Leadership', [App\Http\Controllers\AdminsController::class, 'add_Leadership'])->name('admin.add_Leadership')->middleware('is_admin');
   Route::get('/leaderships', [App\Http\Controllers\AdminsController::class, 'leaderships'])->name('admin.leaderships')->middleware('is_admin');
   Route::get('/deleteLeadership/{id}', [App\Http\Controllers\AdminsController::class, 'deleteLeadership'])->name('admin.deleteLeadership')->middleware('is_admin');
   Route::get('/editLeadership/{id}', [App\Http\Controllers\AdminsController::class, 'editLeadership'])->name('admin.editLeadership')->middleware('is_admin');
   Route::post('/edit_Leadership/{id}', [App\Http\Controllers\AdminsController::class, 'edit_Leadership'])->name('admin.edit_Leadership')->middleware('is_admin');

   Route::get('/addMember', [App\Http\Controllers\AdminsController::class, 'addMember'])->name('admin.addMember')->middleware('is_admin');
   Route::post('/add_Member', [App\Http\Controllers\AdminsController::class, 'add_Member'])->name('admin.add_Member')->middleware('is_admin');
   Route::get('/members', [App\Http\Controllers\AdminsController::class, 'members'])->name('admin.members')->middleware('is_admin');
   Route::get('/deleteMember/{id}', [App\Http\Controllers\AdminsController::class, 'deleteMember'])->name('admin.deleteMember')->middleware('is_admin');
   Route::get('/editMember/{id}', [App\Http\Controllers\AdminsController::class, 'editMember'])->name('admin.editMember')->middleware('is_admin');
   Route::post('/edit_Member/{id}', [App\Http\Controllers\AdminsController::class, 'edit_Member'])->name('admin.edit_Member')->middleware('is_admin');


    Route::get('/blogs',  [App\Http\Controllers\AdminsController::class, 'blog'])->middleware('is_admin');
    Route::get('/editBlog/{id}',  [App\Http\Controllers\AdminsController::class, 'editBlog'])->middleware('is_admin');
    Route::get('/delete_Blog/{id}',  [App\Http\Controllers\AdminsController::class, 'delete_Blog'])->middleware('is_admin');
    Route::post('/edit_Blog/{id}',   [App\Http\Controllers\AdminsController::class, 'edit_Blog'])->middleware('is_admin');
    Route::get('/addBlog',   [App\Http\Controllers\AdminsController::class, 'addBlog'])->middleware('is_admin');
    Route::post('/add_blog',   [App\Http\Controllers\AdminsController::class, 'add_Blog'])->middleware('is_admin');

    Route::get('/generate-number/{id}',  [App\Http\Controllers\AdminsController::class, 'generate_number'])->middleware('is_admin');


});

Route::group(['prefix'=>'members'], function(){
    Route::get('/', [App\Http\Controllers\MembersController::class, 'index'])->name('members');
    Route::get('/summary', [App\Http\Controllers\MembersController::class, 'summary'])->name('summary');
    Route::get('/summary', [App\Http\Controllers\MembersController::class, 'sum'])->name('summary');


    Route::post('/save-changes', [App\Http\Controllers\MembersController::class, 'save_changes'])->name('save-changes');


});
