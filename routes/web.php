<?php

use Illuminate\Support\Facades\Route;

Route::get('/',[App\Http\Controllers\ProductController::class,'index'])->name('index');
Route::get('/create',[App\Http\Controllers\ProductController::class,'create'])->name('create');
Route::post('/store',[App\Http\Controllers\ProductController::class,'store'])->name('store');