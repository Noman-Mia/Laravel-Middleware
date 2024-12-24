<?php

use App\Http\Controllers\DemoController;
use App\Http\Middleware\DemoMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello1/{key}', [DemoController::class, 'DemoAction1']);
Route::get('/hello2/{key}', [DemoController::class, 'DemoAction2']);
Route::get('/hello3/{key}', [DemoController::class, 'DemoAction3']);
Route::get('/hello4/{key}', [DemoController::class, 'DemoAction4']);

// Route::middleware( [DemoMiddleware::class])->group(function () {
//     Route::get('/hello1/{key}', [DemoController::class, 'DemoAction1']);
//     Route::get('/hello2/{key}', [DemoController::class, 'DemoAction2']);
//     Route::get('/hello3/{key}', [DemoController::class, 'DemoAction3']);
//     Route::get('/hello4/{key}', [DemoController::class, 'DemoAction4']);
// });
    