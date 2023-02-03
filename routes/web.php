<?php

use Src\Route;
use \App\Controllers\DefaultController;
use \App\Controllers\UserController;

Route::get('/', [DefaultController::class, 'homepage']);
Route::get('/about', [DefaultController::class, 'about']);
Route::get('/contact', [DefaultController::class, 'contact']);

Route::post('/user/create', [UserController::class, 'create']);