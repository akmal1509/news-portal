<?php

use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::controller(UserController::class)->prefix('users')->group(function () {
//     Route::get('/all', 'getUser');
// });
Route::prefix('users')->group(function () {
    Route::get('/', [UserController::class, 'index']);
});
