<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hero;

class HeroController extends Controller
{
    public function index()
    {
        //route --> /heroes/
        //fetch all records & pass to index view
        $heroes = Hero::orderBy('created_at', 'desc')->get(); //fetch all heroes from database
        return view('heroes.index', ['heroes' => $heroes]);
    }

    public function show($id)
    {
        //route --> /heroes/{id}
        //fetch a single record by id & pass to show view
        $hero = Hero::findOrFail($id); //fetch hero by id or fail with 404
        return view('heroes.show', ['hero' => $hero]); //heroes/show.blade.php
    }

    public function create()
    {
        //route --> /heroes/create
        //render a create view with a form to add a new hero
        return view('heroes.create');
    }

    public function store()
    {
        //route --> /heroes/ (POST)
        //validate & save new hero to database
    }
}
