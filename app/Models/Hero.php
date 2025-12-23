<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    protected $fillable = [ //protect against mass assignment vulnerability
        'name',
        'skill',
        'quirk',
    ];
    /** @use HasFactory<\Database\Factories\HeroFactory> */
    use HasFactory;
}
