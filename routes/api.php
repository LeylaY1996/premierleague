<?php

use App\Http\Controllers\GameMatchController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MatchWeekController;
use App\Http\Controllers\StatisticsController;
use App\Http\Controllers\TeamController;

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

Route::resource('/match', GameMatchController::class);
Route::resource('/team', TeamController::class);
Route::resource('/match-week', MatchWeekController::class);
Route::get('stats/', [StatisticsController::class, 'index']);
Route::get('stats/filter/{week}', [StatisticsController::class, 'filter']);



