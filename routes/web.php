<?php

use App\Http\Controllers\StatusController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\TypeController;
use Illuminate\Support\Facades\Route;

//BASE
Route::view('/', 'index');

//TODOS
Route::get('/todo', [TodoController::class, 'index'])->name('index');
Route::post('/todo', [TodoController::class, 'store'])->name('store');

//TYPES
Route::get('/type', [TypeController::class, 'index'])->name('idex.type');


//STATUES
Route::get('/status', [StatusController::class, 'index'])->name('idex.type');
