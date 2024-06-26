<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\BlogController;

// Route::get('/', function () {
//     return inertia::render('create');
// });


Route::get('/', [BlogController::class,'index']);
Route::get('/blog/create',[BlogController::class,'create']);
Route::post('/blog',[BlogController::class,'store']);
Route::get('/blog/edit/{blog}',[BlogController::class,'edit']);
Route::put('/blog/update/{blog}',[BlogController::class,'update']);
Route::delete('/blog/delete/{blog}',[BlogController::class,'destroy']);
Route::get('/blog/{blog}',[BlogController::class,'show']);

