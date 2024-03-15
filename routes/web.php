<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('index');
});

Route::post('/store', [UserController::class, 'store'])->name('contact.store');
