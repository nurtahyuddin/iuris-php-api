<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LegalCaseController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Cara cepat mendaftarkan semua rute CRUD sekaligus
Route::apiResource('cases', LegalCaseController::class);