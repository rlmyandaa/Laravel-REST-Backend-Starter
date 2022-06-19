<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Sanctum Auth
require __DIR__.'/sanctum.php';

use Orion\Facades\Orion;
use App\Http\Controllers\Api\OrmController;

Route::group(['as' => 'api.'], function() {
    Orion::resource('orm', OrmController::class)->withSoftDeletes();
});
