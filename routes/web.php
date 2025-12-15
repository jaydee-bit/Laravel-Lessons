<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Additional routes can be defined here
Route::get('/heroes', function () {
    $heroes = [
        ['name' => 'Midoriya', 'skill' => 'One For All', 'id' => 1],
        ['name' => 'Bakugo', 'skill' => 'Explosion', 'id' => 2],
        ['name' => 'Todoroki', 'skill' => 'Half-Cold Half-Hot', 'id' => 3]
    ];

    // Logic to fetch ninjas can be added here
    return view('heroes.index', ['greeting' => 'Welcome to the Heroes page!', 'heroes' => $heroes]);
    //output dynamic value using {{ }} in blade file
});

// Dynamic route to show individual hero details
Route::get('/heroes/{id}', function ($id) { //wildcard route parameter
    // In a real application, you would fetch the hero from a database
    return view('heroes.show', ['id' => $id]); //heroes/show.blade.php
});
