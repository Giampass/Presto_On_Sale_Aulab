<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RevisorController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'home'])->name('home');

Route::get('/create/Article', [ArticleController::class, 'create'])->name('create');
Route::get('/article/index', [ArticleController::class, 'index'])->name('index');
Route::get('/show/article/{article}', [ArticleController::class, 'show'])->name('show');
Route::get('/category/{category}', [ArticleController::class, 'byCategory'])->name('byCategory');

Route::get('/revisor/index', [RevisorController::class, 'index'])->name('revisor.index');
Route::patch('/accept/{article}', [RevisorController::class, 'accept'])->name('accept');
Route::patch('/reject/{article}', [RevisorController::class, 'reject'])->name('reject');
