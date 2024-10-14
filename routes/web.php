<?php

use Illuminate\Support\Facades\Route;

Route::get('/',[App\Http\Controllers\ProductController::class,'index'])->name('product.index');
Route::get('/create',[App\Http\Controllers\ProductController::class,'create'])->name('product.create');
Route::post('/store',[App\Http\Controllers\ProductController::class,'store'])->name('product.store');
Route::delete('/destroy/{product}',[App\Http\Controllers\ProductController::class,'destroy'])->name('product.destroy');
Route::get('/edit/{id}',[App\Http\Controllers\ProductController::class,'edit'])->name('product.edit');
Route::put('/update/{product}',[App\Http\Controllers\ProductController::class, 'update'])->name('product.update');