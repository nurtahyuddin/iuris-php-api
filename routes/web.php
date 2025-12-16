<?php

use Illuminate\Support\Facades\Route;

// Rute default web
Route::get('/', function () {
    return response()->json([
        "api_name" => "IURIS Legal API (Laravel Version)",
        "status" => "Online",
        "framework" => "Laravel",
        "database" => "Cloud Aiven MySQL",
        "endpoints" => [
            "get_all_cases" => "/api/cases"
        ],
        "message" => "Gunakan /api/cases untuk mengakses data."
    ]);
});