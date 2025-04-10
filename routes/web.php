<?php

use Illuminate\Support\Facades\Route;

// Home
Route::get('/', function () {
    $comics = config("comics");
    return view('home', compact("comics"));
})->name("home");

// Characters
Route::get("/characters", function () {
    $characters = config("characters");
    return view("characters", compact("characters"));
})->name("characters");

?>
