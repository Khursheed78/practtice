<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('practice',function(){
    return view('laravel-exceptions-renderer::components.card');
    });
    Route::get('practices',function(){
        return view('laravel-exceptions-renderer::components.card');
        });
