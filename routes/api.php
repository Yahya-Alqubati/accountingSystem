<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;


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

Route::get('/user', [UserController::class, 'index'])->middleware('auth:api');
Route::get('/userById/{id}', [UserController::class, 'show']);
Route::post('/user', [UserController::class, 'store']);

// Route::middleware('auth:api')->get('/userfffff', function (Request $request) {
//     return $request->user();
// });
