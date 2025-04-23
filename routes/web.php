<?php

use Illuminate\Support\Facades\Route;
use Src\Tags\Infrastructure\Http\Controllers\TagsController;
use Src\Tags\Infrastructure\Http\Controllers\AjaxTagsController;
use Src\Dashboard\Infrastructure\Http\Controllers\DashboardController;
use Src\Shared\Infrastructure\Http\Controllers\DefaultController;

/**
 * Ruta original de Laravel para la vista welcome
 */

Route::get('/welcome', fn() => view('welcome'))->name('welcome');

/**
 * Rutas de la aplicación
 */

// Ruta base
Route::redirect('/', default_url());

// Rutas protegidas
Route::middleware(['auth'])->group(function () {
    Route::get('/home',                 [DefaultController::class, 'home'])->name('home');
    Route::get('/dashboard',            [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/posts/{slug}',         [DashboardController::class, 'post'])->name('post');
    Route::get('/tags/{type?}',         [TagsController::class, 'tags'])->name('tags');
    Route::get('/fetch/tags/{type?}',   [AjaxTagsController::class, 'tags'])->name('fetch.tags');
    Route::post('/fetch/tags',          [AjaxTagsController::class, 'create'])->name('fetch.tags.create');
    Route::put('/fetch/tags/{id}',      [AjaxTagsController::class, 'update'])->name('fetch.tags.update');
    Route::delete('/fetch/tags/{id}',   [AjaxTagsController::class, 'delete'])->name('fetch.tags.delete');
});
