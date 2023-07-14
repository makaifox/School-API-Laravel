<?php

use App\Http\Controllers\AlunosController;
use Illuminate\Support\Facades\Route;



Route::get('/list', [AlunosController::class, 'index']);
Route::post('/register', [AlunosController::class, 'store']);
Route::get('/search/{id}', [AlunosController::class, 'show']);
Route::put('/edit/{id}', [AlunosController::class, 'update']);
Route::delete('/delete/{id}', [AlunosController::class, 'destroy']);
