<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// public routes
Route::post("/register", [AuthController::class, "register"]);
Route::post("/login", [AuthController::class, "login"]);

// private routes
Route::group(["middleware" => ["auth:sanctum"]], function () {
    Route::resource("students", StudentController::class);
    Route::post("/logout", [AuthController::class, "logout"]);
    Route::post("/profile", [AuthController::class, "profile"]);
});

Route::middleware("auth:sanctum")->get("/user", function (Request $request) {
    return $request->user();
});
