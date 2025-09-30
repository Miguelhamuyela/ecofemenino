<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\MultimediaController;
use App\Http\Controllers\Site\YouthController;


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
Route::get('/multimedia', [MultimediaController::class, 'index'])->name('site.multimedia');
Route::get('/youth', [YouthController::class, 'index'])->name('site.youth');

