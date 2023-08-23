<?php

use App\Http\Controllers\Api\ItemsController;
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

Route::get('/items', [ItemsController::class, 'index']);                                 //Read
Route::post('/items', [ItemsController::class, 'store']);                               //create
Route::get('/items/{item}', [ItemsController::class, 'show']);                          //Read{id}
Route::put('/items/{item}', [ItemsController::class, 'update']);                        //Update{id}
Route::delete('/items/{item}', [ItemsController::class, 'destroy']);                    //Delete{id}
