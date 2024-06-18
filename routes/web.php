<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/teste' , [\App\Http\Controllers\TesteController::class, 'teste']);
