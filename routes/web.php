<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('explorebooks-public'));
Route::get('/explorebooks', fn () => view('explorebooks'))->name('explorebooks');
Route::get('/detail', fn () => view('detail'));
Route::get('/read', fn () => view('read'));
Route::get('/community', fn () => view('community'));
Route::get('/auth.login', fn () => view('auth.login'))->name('login');
Route::get('/auth.register', fn () => view('auth.register'))->name('register');


Route::get('/', function () {
    return view('pages.explorebooks-public');
})->name('explorebooks-public');

Route::get('/community', function () {
    return view('pages.community-public');
})->name('community-public');