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

Route::post('/token', [\App\Http\Controllers\Auth\AuthController::class, 'getToken']);

Route::group(['prefix' => 'v1', 'as' => 'api.', 'middleware' => ['auth:sanctum']], function () {
    // User
    Route::get('user', function (Request $request) {
        return $request->user();
    });
    // Post - resource routes
//    Route::apiResource('posts', \App\Http\Controllers\Api\v1\PostApiController::class);

    // Post defined routes
    Route::get('posts', [\App\Http\Controllers\Api\v1\PostApiController::class, 'index']);
    Route::get('posts/{post}', [\App\Http\Controllers\Api\v1\PostApiController::class, 'show']);
    Route::post('posts/store', [\App\Http\Controllers\Api\v1\PostApiController::class, 'store']);
    Route::post('posts/{post}', [\App\Http\Controllers\Api\v1\PostApiController::class, 'update']);
    Route::delete('posts/{post}', [\App\Http\Controllers\Api\v1\PostApiController::class, 'destroy']);
});
