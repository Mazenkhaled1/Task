<?php

use App\Http\Controllers\Admin\About_us\About_us_contentController;
use App\Http\Controllers\Admin\About_us\About_us_headerController;
use App\Http\Controllers\Admin\About_us\About_us_mainController;
use App\Http\Controllers\Admin\About_us\About_us_propertyController;
use App\Http\Controllers\Admin\ContactUs\ContactUs_PageController;
use App\Http\Controllers\Admin\ContactUs\ContactUsController;
use App\Http\Controllers\Admin\Home\Home_facilitiesController;
use App\Http\Controllers\Admin\Home\Home_headerController;
use App\Http\Controllers\Admin\Home\Home_imageController;
use App\Http\Controllers\Admin\Home\Home_projectController;
use App\Http\Controllers\Admin\Home\Home_stateController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\News\NewsController as NewsNewsController;
use App\Http\Controllers\Admin\News\PostsController;
use App\Http\Controllers\Admin\Proejct\Project_dura_projectController;
use App\Http\Controllers\Admin\Proejct\Project_headerController;
use App\Http\Controllers\Admin\Proejct\Project_serviceController;
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
Route::get('/news_single/{id}', [NewsController::class , 'show'])->name('news_single');
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

    Route::controller(NewsNewsController::class)->group(function() {
        Route::get('/news', 'index')->name('news.index');
        Route::post('/news/edit/{id}', 'edit')->name('news.edit');
        Route::put('/news/{id}', 'update')->name('news.update');
    });

    Route::controller(PostsController::class)->group(function() {
        Route::get('/posts', 'index')->name('posts.index');
        Route::post('/posts', 'store')->name('posts.store');
        Route::delete('/posts/{id}', 'destroy')->name('posts.delete');
    });

    // about_us_main
    Route::controller(About_us_mainController::class)->group(function() {
        Route::get('/about_us_main', 'index')->name('about_us_main.index');
        Route::post('/about_us_main/edit/{id}', 'edit')->name('about_us_main.edit');
        Route::put('/about_us_main/{id}', 'update')->name('about_us_main.update');
    });

    // about_us_header
    Route::controller(About_us_headerController::class)->group(function() {
        Route::get('/about_us_header', 'index')->name('about_us_header.index');
        Route::post('/about_us_header/edit/{id}', 'edit')->name('about_us_header.edit');
        Route::put('/about_us_header/{id}', 'update')->name('about_us_header.update');
    });

    // about_us_content
    Route::controller(About_us_contentController::class)->group(function() {
        Route::get('/about_us_content', 'index')->name('about_us_content.index');
        Route::post('/about_us_content', 'store')->name('about_us_content.store');
        Route::post('/about_us_content/edit/{id}', 'edit')->name('about_us_content.edit');
        Route::put('/about_us_content/{id}', 'update')->name('about_us_content.update');
    });

    // about_us_property
    Route::controller(About_us_propertyController::class)->group(function() {
        Route::get('/about_us_property', 'index')->name('about_us_property.index');
        // Route::post('/about_us_property', 'store')->name('about_us_property.store');
        Route::post('/about_us_property/edit/{id}', 'edit')->name('about_us_property.edit');
        Route::put('/about_us_property/{id}', 'update')->name('about_us_property.update');
    });

    // home_project 
    Route::controller(Home_projectController::class)->group(function() {
        Route::get('/home_project', 'index')->name('home_project.index');
        Route::post('/home_project/edit/{id}', 'edit')->name('home_project.edit');
        Route::put('/home_project/{id}', 'update')->name('home_project.update');
    });

    // home_state
    
     Route::controller(Home_stateController::class)->group(function() {
        Route::get('/home_state', 'index')->name('home_state.index');
        Route::post('/home_state', 'store')->name('home_state.store');
        Route::post('/home_state/edit/{id}', 'edit')->name('home_state.edit');
        Route::put('/home_state/{id}', 'update')->name('home_state.update');
    });


    // home_facilities
    Route::controller(Home_facilitiesController::class)->group(function() {
        Route::get('/home_facility', 'index')->name('home_facility.index');
        Route::post('/home_facility', 'store')->name('home_facility.store');
        Route::post('/home_facility/edit/{id}', 'edit')->name('home_facility.edit');
        Route::put('/home_facility/{id}', 'update')->name('home_facility.update');
    });

    // home_images
    Route::controller(Home_imageController::class)->group(function() {
        Route::get('/home_image', 'index')->name('home_image.index');
        Route::post('/home_image/edit/{id}', 'edit')->name('home_image.edit');
        Route::put('/home_image/{id}', 'update')->name('home_image.update');
    });

    // home_header 
    Route::controller(Home_headerController::class)->group(function() {
        Route::get('/home_header', 'index')->name('home_header.index');
        Route::post('/home_header/edit/{id}', 'edit')->name('home_header.edit');
        Route::put('/home_header/{id}', 'update')->name('home_header.update');
    });

    // project header 
    Route::controller(Project_headerController::class)->group(function() {
        Route::get('/project_header', 'index')->name('project_header.index');
        Route::post('/project_header/edit/{id}', 'edit')->name('project_header.edit');
        Route::put('/project_header/{id}', 'update')->name('project_header.update');
    });

    // project dura_project 
    Route::controller(Project_dura_projectController::class)->group(function() {
        Route::get('/dura_project', 'index')->name('dura_project.index');
        Route::post('/dura_project/edit/{id}', 'edit')->name('dura_project.edit');
        Route::put('/dura_project/{id}', 'update')->name('dura_project.update');
    });

    // project services 
    Route::controller(Project_serviceController::class)->group(function() {
        Route::get('/project_service', 'index')->name('project_service.index');
        Route::post('/project_service', 'store')->name('project_service.store');
        Route::post('/project_service/edit/{id}', 'edit')->name('project_service.edit');
        Route::put('/project_service/{id}', 'update')->name('project_service.update');
    });
});

