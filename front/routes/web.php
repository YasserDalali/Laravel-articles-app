<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Dash;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
/* use App\Http\Controllers\Dash;
 */


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dash', [Dash::class, 'index']);



Route::get('/articles/create', [ArticleController::class, 'createArticle'])->name('create');


Route::get('/articles', [ArticleController::class, 'getArticles']);


Route::get('/article/{id}', [ArticleController::class, 'searchArticle']);
