<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogInController;
use App\Http\Controllers\RegisterController;
use Illuminate\Auth\Events\Login;

Route::get('/', function () {
    return view('login');
});

Route::get('/login', [LogInController::class, 'ShowLogInForm']) -> name('login');
Route::post('/login', [LogInController::class, 'LogIn']);

Route::middleware('auth')->group(function(){
    Route::get('/dashboard',function(){
        return view('dashboard');
    })->name('dashboard');

    Route::post('/logout', [LogInController::class, 'logout']) -> name('logout');
});

Route::get('/register', [RegisterController::class, 'ShowRegisterForm']) -> name('register');
Route::post('/register', [RegisterController::class, 'Register']);

Route::controller(LogInController::class)->group(function() {
    Route::get('/auth/{provider}', 'redirectToProvider')->name('auth.redirect');
    Route::get('/auth/{provider}/callback', 'providerAuth')->name('auth.provider');
});
