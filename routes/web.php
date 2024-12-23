<?php

use App\Http\Controllers\DemoController;
use App\Http\Middleware\DemoMiddaleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello',[DemoController::class,'DemoAction'])->middleware([DemoMiddaleware::class]);
