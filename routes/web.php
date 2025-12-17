<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Additional routes can be defined here
Route::get('/heroes', function () {
    $heroes = [
        ['name' => 'Midoriya', 'quirk' => 'One For All', 'skill' => 90, 'id' => 1],
        ['name' => 'Bakugo', 'quirk' => 'Explosion', 'skill' => 75, 'id' => 2],
        ['name' => 'Todoroki', 'quirk' => 'Half-Cold Half-Hot', 'skill' => 70, 'id' => 3]
    ];

    // Logic to fetch ninjas can be added here
    return view('heroes.index', ['greeting' => 'Welcome to the Heroes page!', 'heroes' => $heroes]);
    //output dynamic value using {{ }} in blade file
});

Route::get('/heroes/create', function () {
    return view('heroes.create');
});

// Dynamic route to show individual hero details
Route::get('/heroes/{id}', function ($id) { //wildcard route parameter
    // In a real application, you would fetch the hero from a database
    return view('heroes.show', ['id' => $id]); //heroes/show.blade.php
});
