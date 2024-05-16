<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SegelttLoginController;
use App\Http\Controllers\SegelttRegistrationController;

Route::redirect('/', '/segeltt_login');
Route::get('/segeltt_login', [SegelttLoginController::class, 'showLoginForm']);
Route::post('/segeltt_login', [SegelttLoginController::class, 'login']);
Route::get('/segeltt_registratrion', [SegelttRegistrationController::class, 'showRegistrarionForm']);
Route::post('/segeltt_registratrion', [SegelttRegistrationController::class, 'register']);