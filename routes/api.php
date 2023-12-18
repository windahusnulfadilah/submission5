<?php

use App\Http\Controllers\Users\UserController;
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

Route::group(['prefix' => 'users'], function () {
    Route::get('get-data',  [UserController::class, 'getDataUser']);
    Route::post('create-data', [UserController::class, 'createDataUser']);
    Route::put('update-data', [UserController::class, 'updateDataUser']);
    Route::delete('delete-data', [UserController::class, 'deleteDataUser']);
});
