<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Redirect dari root ke halaman login
Route::get('/', function () {
    return redirect('/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');