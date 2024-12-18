<?php

use App\Http\Controllers\Admin\ContactUs\ContactUs_PageController;
use App\Http\Controllers\Admin\ContactUs\ContactUsController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Web\AboutControlelr;
use App\Http\Controllers\Web\ContactController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\LocationController;
use App\Http\Controllers\Web\NewsController;
use App\Http\Controllers\Web\ProjectController;
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

Route::get('/', [HomeController::class , 'index'])->name('/');
Route::get('/about', [AboutControlelr::class , 'index'])->name('about');
Route::get('/contact', [ContactController::class , 'index'])->name('contact');
Route::post('contact',[ContactController::class , 'store'])->name('contact.store');
Route::get('/news', [NewsController::class , 'index'])->name('news');
Route::get('/news/{single}', [NewsController::class , 'show'])->name('news_single');
Route::get('/location', [LocationController::class, 'index'])->name('location');
Route::get('/projects', [ProjectController::class, 'index'])->name('projects');




Route::prefix('dashboard')->group(function() {
    Route::get('/', [AdminHomeController::class, 'index']);
    Route::controller(ContactUsController::class)->group(function() { 
        Route::get('/contactUs', 'index')->name('contactUs.index');
        Route::delete('/contactUs/{id}', 'destroy')->name('contact.delete');
    });
    Route::controller(ContactUs_PageController::class)->group(function() {
        Route::get('/contactUs_page', 'index')->name('contactUs_Page.index');
        Route::post('/contactUs/edit/{id}', 'edit')->name('contact.edit');
        Route::put('/contactUs/{id}', 'update')->name('contact.update');
    });
});