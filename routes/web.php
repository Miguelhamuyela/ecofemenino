<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\MultimediaController;
use App\Http\Controllers\Site\YouthController;
use App\Http\Controllers\Site\ContactController;
use App\Http\Controllers\Site\AboutController;
use App\Http\Controllers\Site\NewsController;



/*-------------------------------------------------------
                    Site routes
-------------------------------------------------------*/

Route::get('/', [HomeController::class, 'index'])->name('site.home');
Route::get('/contact', [ContactController::class, 'index'])->name('site.contact');
Route::get('/about', [AboutController::class, 'index'])->name('site.about');
Route::get('/news', [NewsController::class, 'index'])->name('site.news');
Route::get('/news/profile', [NewsController::class, 'newsProfile'])->name('site.news.profile');
Route::get('/news/notice', [NewsController::class, 'newsNotice'])->name('site.news.notice');
Route::get('/news/event', [NewsController::class, 'newsEvent'])->name('site.news.event');
/* {{-- This Route need id event --}} */
Route::get('/news/event/detail', [HomeController::class, 'newsEventDetail'])->name('site.news.event.detail');
Route::get('/news/article', [HomeController::class, 'newsArticle'])->name('site.news.article');
Route::get('/multimedia', [MultimediaController::class, 'index'])->name('site.multimedia');
Route::get('/youth', [YouthController::class, 'index'])->name('site.youth');

