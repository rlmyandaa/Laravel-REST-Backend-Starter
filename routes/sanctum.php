<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//API route for register new user
Route::post('/register', [App\Http\Controllers\Api\SanctumAuth::class, 'register']);
//API route for login user
Route::post('/login', [App\Http\Controllers\Api\SanctumAuth::class, 'login']);

//Protecting Routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/profile', function(Request $request) {
        return auth()->user();
    });

    // API route for logout user
    Route::post('/logout', [App\Http\Controllers\Api\SanctumAuth::class, 'logout']);
});