<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Livewire\Front\Homepage::class)->name('front.homepage');
Route::get('/articles', \App\Livewire\Front\Article::class)->name('front.articles');
Route::get('/article-detail', \App\Livewire\Front\ArticleDetail::class)->name('front.article-detail');
Route::get('/about', \App\Livewire\Front\About::class)->name('front.about');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
