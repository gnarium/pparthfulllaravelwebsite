<?php

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
});

Route::view('/','front_end/index');
Route::view('/about','front_end/about');
Route::view('/gallery','front_end/gallery');
Route::view('/contactus','front_end/contactus');
Route::get('/',[App\Http\Controllers\HomeController::class,'index_home'])->name('admin');
Route::post('/',[App\Http\Controllers\HomeController::class,'membership_db'])->name('admin');

Auth::routes();
Route::get('/gallery',[App\Http\Controllers\HomeController::class,'blogs_data']);

Route::get('contactus',[App\Http\Controllers\HomeController::class,'contact'])->name('admin');
Route::post('contactus',[App\Http\Controllers\HomeController::class,'contact_db'])->name('admin');




Route::get('/admin/adminpages/addgallery',[App\Http\Controllers\HomeController::class,'blogs']);
Route::post('/admin/adminpages/addgallery',[App\Http\Controllers\HomeController::class,'blogs_db']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/adminpages/admincontact',[App\Http\Controllers\HomeController::class,'contactdisplay'])->name('admin');
Route::get('/admin/adminpages/adminmembershipinfo',[App\Http\Controllers\HomeController::class,'membershipdisplay'])->name('admin');
Auth::routes();
Route::get('/admin/adminpages/galleryinfo',[App\Http\Controllers\HomeController::class,'bloglist']);
Route::get('/admin/adminpages/editblog',[App\Http\Controllers\HomeController::class,'edit']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('edit/{id}',[App\Http\Controllers\HomeController::class,'editBlog'])->name('adminBlogEdit');
Route::put('update/{id}',[App\Http\Controllers\HomeController::class,'updateBlog'])->name('adminBlogUpdate');

Route::delete('admin/destroy/{id}',[App\Http\Controllers\HomeController::class,'deleteBlog'])->name('adminBlogDestroy');