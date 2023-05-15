<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChiTieuController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/", [ChiTieuController::class, "index"]);
Route::get("/add", [ChiTieuController::class, "add"]);
Route::post("/add", [ChiTieuController::class, "postAdd"]);
Route::get("/search", [ChiTieuController::class, "search"]);


