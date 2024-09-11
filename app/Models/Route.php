<?php

// app/Models/Route.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    use HasFactory;

    protected $fillable = ['route_name', 'start_point', 'end_point', 'stops', 'departure_time', 'arrival_time'];

    // Casting the stops JSON to an array
    protected $casts = [
        'stops' => 'array',
    ];
}
