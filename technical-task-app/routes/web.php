<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;

Route::redirect('/', '/users');

Route::resource('users', UserController::class)->only([
    'index', 'create', 'store'
]);