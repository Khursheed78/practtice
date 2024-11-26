<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;



Route::post('/addstudent', [UserController::class, 'save']);


Route::get('/show', [UserController::class,'show']);

Route::put('/update-student/{id}', [UserController::class, 'update']);

Route::delete('/delete-student/{id}', [UserController::class, 'delete']);



