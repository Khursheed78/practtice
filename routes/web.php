<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('practice',function(){
    return view('laravel-exceptions-renderer::components.card');
    });
    Route::get('ex',function(){
        return view('laravel-exceptions-renderer::components.card');
        });
  
      
      
      