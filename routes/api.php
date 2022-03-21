<?php

use App\Http\Controllers\Api\EthereumController;
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

//Route::get('/desks', [\App\Http\Controllers\Api\DeskController::class, 'index']);
//Route::get('/ethereum', [\App\Http\Controllers\Api\EthereumController::class, 'index']);

Route::apiResources([
    'ethereum' => EthereumController::class,
]);
