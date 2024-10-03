<?php

use App\Http\Controllers\UserController;
use App\Http\Middleware\check;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/main', function(){
    return view('index');
})->middleware(check::class);

Route::controller(UserController::class)->group(function(){
    Route::post('/login','LoginFunction');
    Route::get('/logout','LogoutFunction')->name('logout');
});