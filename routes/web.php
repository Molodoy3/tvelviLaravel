<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;


Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/about', [MainController::class, 'about'])->name('about');
Route::get('/portfolio', [MainController::class, 'portfolio'])->name('portfolio');
Route::get('/contacts', [MainController::class, 'contacts'])->name('contacts');
Route::get('/reviews', [MainController::class, 'reviews'])->name('reviews');
Route::get('/articles', [MainController::class, 'articles'])->name('articles');

/*Route::get('/', function () {
    return view('app');
});*/
