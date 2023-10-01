<?php

use App\Http\Controllers\DefaultController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!

*/

Route::get('/',[DefaultController::class,'index'])->name('index');
Route::get('/about',[DefaultController::class,'about'])->name('about');
Route::get('/projectDetail/{id}',[DefaultController::class,'projectDetail'])->name('projectDetail');
Route::get('/projects',[DefaultController::class,'projects'])->name('projects');
Route::get('/blog',[DefaultController::class,'blog'])->name('blog');
Route::get('/blog/{id}',[DefaultController::class,'blogDetail'])->name('blogDetail');
Route::get('/service/{id}',[DefaultController::class,'serviceDetail'])->name('serviceDetail');
Route::get('/contact',[DefaultController::class,'contact'])->name('contact');
