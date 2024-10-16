<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/test', [MainController::class, 'test'])->name('test');
Route::get('/get_last_new', [MainController::class, 'getLastNew'])->name('getLastNew');
//основные страницы
Route::get('/', [ServiceController::class, 'show'])->name('index');
Route::get('/about', [MainController::class, 'about'])->name('about');
Route::get('/portfolio', [MainController::class, 'portfolio'])->name('portfolio');
Route::get('/contacts', [MainController::class, 'contacts'])->name('contacts');
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
//получение картинки для статьи
Route::get('/article/image/{article}', [ArticleController::class, 'image'])->name('article.image');

//отправка заявки
Route::post('/application-send', [ApplicationController::class, 'send'])->name('applicationSend');
Route::post('/big-application-send', [ApplicationController::class, 'bigApplicationSend'])->name('bigApplicationSend');
Route::get('/successful-shipment', [ApplicationController::class, 'successfulShipment'])->name('successfulShipment');

//сервисы
Route::get('/{service}', [ServiceController::class, 'show'])->name('service'); //типо превью услуги
Route::get('/{service}/order', [ServiceController::class, 'showOrder'])->name('serviceOrder'); //страница для просмотра подробной инф-ции заказа + заказать



