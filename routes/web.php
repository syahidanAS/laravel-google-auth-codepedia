<?php

use App\Http\Controllers\SocialiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');


Route::get('/redirect', [SocialiteController::class, 'redirect'])->name('redirect')->middleware('guest');

Route::get('/callback', [SocialiteController::class, 'callback'])->name('callback')->middleware('guest');

Route::post('/logout', [SocialiteController::class, 'logout'])->name('logout')->middleware('guest');
