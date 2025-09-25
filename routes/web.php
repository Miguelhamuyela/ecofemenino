<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\ColorController;
use App\Http\Controllers\Admin\ModelsController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\FuelController;
use App\Http\Controllers\Admin\CarController;
use App\Http\Controllers\Admin\SupplierController;
use App\Model\Models;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\DriverController;
use App\Models\Brand;
use App\Http\Controllers\Admin\ReserveController; 



/*-------------------------------------------------------
                    Site routes
-------------------------------------------------------*/

Route::get('/', [HomeController::class, 'index'])->name('site.home');
Route::get('/contact', [HomeController::class, 'contact'])->name('site.contact');
Route::get('/about', [HomeController::class, 'about'])->name('site.about');
Route::get('/news', [HomeController::class, 'news'])->name('site.news');
Route::get('/news/profile', [HomeController::class, 'newsProfile'])->name('site.news.profile');
Route::get('/news/notice', [HomeController::class, 'newsNotice'])->name('site.news.notice');
Route::get('/news/event', [HomeController::class, 'newsEvent'])->name('site.news.event');
/* {{-- This Route need id event --}} */
Route::get('/news/event/detail', [HomeController::class, 'newsEventDetail'])->name('site.news.event.detail');
Route::get('/news/article', [HomeController::class, 'newsArticle'])->name('site.news.article');
Route::get('/multimedia', [HomeController::class, 'multimedia'])->name('site.multimedia');
Route::get('/youth', [HomeController::class, 'youth'])->name('site.youth');


