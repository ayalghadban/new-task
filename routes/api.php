<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


// Register user
Route::post('/register', [AuthController::class, 'register']);

Route::group(['middleware' => ['auth:sanctum'] ], function ()
{
    // Login user
    Route::post('/login', [AuthController::class, 'login']);

    // Logout
    Route::get('logout', [AuthController::class, 'logout']);

    //get user profile
    Route::get('/get_profile',[UserController::class,'get_profile']);

    //CRUD article for one blogger 

    Route::prefix('/article')->group(function()
    {
        Route::get('/all',[ArticleController::class,'all']);
        Route::get('/one',[ArticleController::class,'one']);
        Route::post('/create',[ArticleController::class,'create']);
        Route::post('/update',[ArticleController::class,'update']);
        Route::delete('/delete',[ArticleController::class,'delete']);
    });
});



