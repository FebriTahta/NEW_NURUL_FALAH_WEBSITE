<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiMediaController;
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

Route::get('list-berita',[ApiMediaController::class,'berita']);
Route::get('list-berita2',[ApiMediaController::class,'berita2']);
Route::get('list-artikel',[ApiMediaController::class,'artikel']);
Route::get('detail/{posting_slug}',[ApiMediaController::class,'detail']);
