<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;


//основные страницы
Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/about', [MainController::class, 'about'])->name('about');
Route::get('/portfolio', [MainController::class, 'portfolio'])->name('portfolio');
Route::get('/contacts', [MainController::class, 'contacts'])->name('contacts');
Route::get('/service/{service}', [ServiceController::class, 'show'])->name('service');
//политика
Route::get('/privacy-agreement', [MainController::class, 'privacyAgreement'])->name('privacyAgreement');
Route::get('/privacy', [MainController::class, 'privacy'])->name('privacy');

//отзывы
Route::get('/reviews', [ReviewController::class, 'index'])->name('reviews');
Route::post('/reviews/load-more', [ReviewController::class, 'loadMore'])->name('reviewsLoadMore');
Route::post('/reviews/store', [ReviewController::class, 'store'])->name('reviews.store');

//статьи
Route::get('/articles', [ArticleController::class, 'index'])->name('articles');
Route::get('/article/{article}', [ArticleController::class, 'show'])->name('article.show');

//отправка заявки
Route::post('/application-send', [ApplicationController::class, 'send'])->name('applicationSend');
Route::get('/successful-shipment', [ApplicationController::class, 'successfulShipment'])->name('successfulShipment');




/*Route::get('/', function () {
    return view('app');
});*/
