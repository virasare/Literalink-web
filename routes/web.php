<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('explorebooks-public'));
Route::get('/explorebooks', fn () => view('explorebooks'));
Route::get('/detail', fn () => view('detail'));
Route::get('/read', fn () => view('read'));
Route::get('/community', fn () => view('community'));
Route::get('/login', fn () => view('login'));


// Route::get('/', function () {
//     return view('welcome');
// });
