<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SegelttLoginController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/segeltt_login', [SegelttLoginController::class, 'showLoginForm']);