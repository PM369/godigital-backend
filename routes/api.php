<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PriceController;

// use App\Models\Service;



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
Route::group(['middleware' => 'auth:sanctum'], function(){
    //All secure URL's
    Route ::post('/addservice',[ServiceController::class,'addService']);
    Route ::delete('/delete/{id}',[ServiceController::class,'delete']);
   
   
    });
// Route ::post('/addproduct',[DeviceController::class,'addProduct']);
Route::get('/productlist',[ServiceController::class,'list']);
Route ::get('/item/{id}',[ServiceController::class,'getItem']);
Route ::put('/itemupdate/{id}',[ServiceController::class,'UpdateItem']);
Route ::post('/addprice',[PriceController::class,'addPrice']);
Route::get('/pricelist',[PriceController::class,'list']);



Route::post("login",[UserController::class,'index']);
