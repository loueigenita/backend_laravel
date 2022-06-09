<?php


use App\Http\Controllers\ComputerController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/computer-items',[ComputerController::class,'index']);
Route::get('/computer-items/{computer}',[ComputerController::class,'show']);
Route::post('/computer-items/store',[ComputerController::class,'store']);
Route::put('/computer-items/edit/{id}',[ComputerController::class,'update']);
Route::delete('/computer-items/delete/{id}',[ComputerController::class,'destroy']);
