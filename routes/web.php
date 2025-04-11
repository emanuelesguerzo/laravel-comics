<?php

use App\Http\Controllers\CharactersController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Home
Route::get('/', [HomeController::class, "indexHome"])->name("home");

// Characters
Route::get("/characters", [CharactersController::class, "indexCharacters"])->name("characters");

?>
