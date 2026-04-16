<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ExpensesController;

Route::get('/categories/home', [CategoryController::class, 'home'])->name('categories.home'); 
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/categories/store', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/categories/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::put('/categories/{id}', [CategoryController::class, 'update'])->name('categories.update');
Route::delete('/categories/{id}', [CategoryController::class, 'delete'])->name('categories.delete');


Route::get('/expenses/{id}/homeExpenses', [CategoryController::class, 'homeExpenses'])->name('expenses.homeExpenses');
Route::get('/expenses/createExpenses',[ExpensesController::class, 'createExpenses'])->name('expenses.createExpenses');
Route::post('/expenses/storeExpenses',[ExpensesController::class, 'storeExpenses'])->name('expenses.storeExpenses');
Route::get('/expenses/{id}/editExpenses', [ExpensesController::class, 'editExpenses'])->name('expenses.editExpenses');
Route::put('/expenses/{id}', [ExpensesController::class, 'updateExpenses'])->name('expenses.updateExpenses');
Route::delete('/expenses/{id}', [ExpensesController::class, 'deleteExpenses'])->name('expenses.deleteExpenses');

// Route::delete('/expenses/{id}', [ExpensesController::class, 'deleteExpenses'])->name('expenses.delete');
