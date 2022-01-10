<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\CategoryControllerV2;
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

Route::get('categoriesv2', [CategoryController::class, 'index_v2']);

Route::apiResource('categories', CategoryControllerV2::class);
