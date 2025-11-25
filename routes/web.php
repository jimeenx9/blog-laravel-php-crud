<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HolaController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProfileController;

// ==========================
//   PÁGINA DE INICIO
// ==========================

Route::get('/', function () {
    return view('welcome');
});

// ==========================
//   RUTAS DEL BLOG
// ==========================

// HolaController
Route::get('/hola', [HolaController::class, 'index']);
Route::get('/hola/{nombre?}', [HolaController::class, 'show']);
Route::get('/articles-page', [HolaController::class, 'articlesPage']);

// Test BD
Route::get('/test-db', function () {
    return \App\Models\Article::with('user')->take(5)->get();
});

// Crear artículo (ANTES de /articles/{id})
Route::get('/articles/create', [ArticleController::class, 'create'])
    ->middleware('auth')
    ->name('articles.create');

// Guardar artículo
Route::post('/articles', [ArticleController::class, 'store'])
    ->middleware('auth')
    ->name('articles.store');

// Listar todos
Route::get('/articles', [ArticleController::class, 'index'])
    ->name('articles.index');

// *** EDITAR (ANTES de show) ***
Route::get('/articles/{id}/edit', [ArticleController::class, 'edit'])
    ->middleware('auth')
    ->name('articles.edit');

// *** ACTUALIZAR ***
Route::put('/articles/{id}', [ArticleController::class, 'update'])
    ->middleware('auth')
    ->name('articles.update');

// Mostrar uno
Route::get('/articles/{id}', [ArticleController::class, 'show'])
    ->name('articles.show');

// Borrar
Route::delete('/articles/{id}', [ArticleController::class, 'destroy'])
    ->middleware('auth')
    ->name('articles.destroy');

// Mis artículos
Route::get('/my-articles', [ArticleController::class, 'myArticles'])
    ->middleware('auth')
    ->name('articles.mine');

// ==========================
//   BREEZE
// ==========================

// Dashboard
Route::get('/dashboard', function () {
    return redirect()->route('articles.mine');
})->middleware(['auth', 'verified'])->name('dashboard');

// Perfil
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Login / Register / Logout
require __DIR__.'/auth.php';
