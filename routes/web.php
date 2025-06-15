<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarController;
use App\Models\Article;
use App\Http\Controllers\ArticleController;

Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        $latestArticles = Article::orderBy('published_at', 'desc')->take(3)->get();
        return view('welcome', compact('latestArticles'));
    })->name('home');

    Route::get('/dashboard', function () {
        return redirect('/');
    })->name('dashboard');

    Route::resource('/articles', ArticleController::class);
    Route::resource('/bars', BarController::class);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';
