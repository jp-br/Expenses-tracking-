<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ExpenseController;

Route::get('/categories/home', [CategoryController::class, 'home'])->name('categories.home'); 
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/categories/store', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/categories/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::put('/categories/{id}', [CategoryController::class, 'update'])->name('categories.update');
Route::delete('/categories/{id}', [CategoryController::class, 'delete'])->name('categories.delete');
