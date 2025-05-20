<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Livewire\Front\Homepage::class)->name('front.homepage');
Route::get('/articles', \App\Livewire\Front\Article::class)->name('front.articles');
Route::get('/article-detail', \App\Livewire\Front\ArticleDetail::class)->name('front.article-detail');
Route::get('/about', \App\Livewire\Front\About::class)->name('front.about');
Route::get('/contact', \App\Livewire\Front\Contact::class)->name('front.contact');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])
->prefix('admin')
->name('admin.')
->group(function () {
    Route::get('/dashboard', \App\Livewire\Admin\Dashboard::class)->name('dashboard');

    // Article
    Route::get('/articles', \App\Livewire\Admin\Article\Index::class)->name('article.index');
    Route::get('/article/create', \App\Livewire\Admin\Article\Create::class)->name('article.create');
});
