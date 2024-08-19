<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sendEmailController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/email', [sendEmailController::class, 'index'])->name('email');
Route::get('/send_email', [sendEmailController::class, 'send_email'])->name('send_email');
