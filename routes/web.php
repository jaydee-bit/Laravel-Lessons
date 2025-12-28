<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HeroController;

Route::get('/', function () {
    return view('welcome');
});
//controllers handle the request logic
// Additional routes can be defined here
Route::get('/heroes', [HeroController::class, 'index']); //list all heroes
//HeroController handles the request

Route::get('/heroes/create', [HeroController::class, 'create']); //form to create a new hero

// Dynamic route to show individual hero details
Route::get('/heroes/{id}', [HeroController::class, 'show']); //show hero details
