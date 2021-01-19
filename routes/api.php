<?php

use App\Http\Controllers\PlayerController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('/players')->group(
    function () {
        Route::get('/', [PlayerController::class, 'index']);
        Route::get('/position/{position}', [PlayerController::class, 'position']);
        Route::get('/randomTeam', [PlayerController::class, 'randomTeam']);
        Route::get('/randomForwards', [PlayerController::class, 'randomForwards']);
        Route::get('/randomMidfielders', [PlayerController::class, 'randomMidfielders']);
        Route::get('/randomDefenders', [PlayerController::class, 'randomDefenders']);
    }
);

Route::prefix('/player')->group(
    function () {
        Route::post('/store', [PlayerController::class, 'store']);
        Route::put('/{id}', [PlayerController::class, 'update']);
        Route::delete('/{id}', [PlayerController::class, 'destroy']);
    }
);
