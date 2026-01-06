<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExploreBooksController;

Route::get('/explorebooks', [ExploreBooksController::class, 'index'])
    ->name('explorebooks');
Route::get('/', [ExploreBooksController::class, 'public'])
    ->name('explorebooks-public');

Route::get('/detail/{slug}', [ExploreBooksController::class, 'detail'])
    ->name('books.detail');

Route::get('/detail-public/{slug}', [ExploreBooksController::class, 'detailPublic'])
    ->name('books.detail.public');

Route::get('/read/{id}', function ($id) {
    return view('read');
})->name('read');

Route::get('/savedbooks', [ExploreBooksController::class, 'savedBooks'])
    ->name('savedbooks');




// Route::get('/', fn () => view('explorebooks-public'));
// Route::get('/explorebooks', fn () => view('explorebooks'))->name('explorebooks');
// Route::get('/detail', fn () => view('detail'))->name('detail');
Route::get('/read', fn () => view('read'))->name('read');
// Route::get('/savedbooks', fn () =>view('savedbooks'))->name('savedbooks');;
Route::get('/activity', fn () =>view('activity'))->name('activity');;
Route::get('/community', fn () => view('community'))->name(name: 'community');;
Route::get('/auth.login', fn () => view('auth.login'))->name('login');
Route::get('/auth.register', fn () => view('auth.register'))->name('register');


// Route::get('/', function () {
//     return view('pages.explorebooks-public');
// })->name('explorebooks-public');

// Route::get('/detail-public', function () {
//     return view('pages.detail-public');
// })->name('detail-public');

Route::get('/community-public', function () {
    return view('pages.community-public');
})->name('community-public');