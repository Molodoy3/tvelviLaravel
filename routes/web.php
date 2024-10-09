<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;


Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/about', [MainController::class, 'about'])->name('about');
Route::get('/portfolio', [MainController::class, 'portfolio'])->name('portfolio');
Route::get('/contacts', [MainController::class, 'contacts'])->name('contacts');
Route::get('/service/{service}', [ServiceController::class, 'show'])->name('service');

Route::get('/reviews', [ReviewController::class, 'index'])->name('reviews');
Route::post('/reviews/load-more', [ReviewController::class, 'loadMore'])->name('reviewsLoadMore');
Route::post('/reviews/store', [ReviewController::class, 'store'])->name('reviews.store');

Route::get('/articles', [ArticleController::class, 'index'])->name('articles');
Route::get('/article/{article}', [ArticleController::class, 'show'])->name('article.show');

/*Route::get('/', function () {
    return view('app');
});*/
