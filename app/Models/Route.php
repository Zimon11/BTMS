<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    protected $table = 'routes';
    protected $fillable = [
        'RouteName',
        'StartLocation',
        'EndLocation',
        'Distance',
        'Ai_OptimizedRoute',
    ];
    
    public $timestamps = true;
    use HasFactory;
}
