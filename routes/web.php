<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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


Route::get('/', [PagesController::class,'index'])->name('index');
Route::get('/about', [PagesController::class,'about'])->name('about');
Route::get('/blog-single', [PagesController::class,'blog-single'])->name('blog-single');
Route::get('/blog', [PagesController::class,'blog'])->name('blog');
Route::get('/contact', [PagesController::class,'contact'])->name('contact');
Route::get('/donate', [PagesController::class,'donate'])->name('donate');
Route::get('/faq', [PagesController::class,'faq'])->name('faq');
Route::get('/portfolio-details', [PagesController::class,'portfolio-details'])->name('portfolio-details');
Route::get('/service', [PagesController::class,'service'])->name('service');
Route::get('/team', [PagesController::class,'team'])->name('team');
Route::get('/testimonials', [PagesController::class,'testimonials'])->name('testimonials');
Route::get('/volunteer', [PagesController::class,'volunteer'])->name('volunteer');
Route::get('/index', [PagesController::class,'index'])->name('index');

