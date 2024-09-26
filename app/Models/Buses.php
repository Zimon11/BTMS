<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buses extends Model
{   
    protected $table = 'buses';
    protected $fillable = [
        'BusNumber',
        'PlateNumber',
        'Capacity',
        'Status',
    ];
    public function drivers() {
        return $this->belongsTo(Drivers::class);
    }
    public $timestamps = true;
    use HasFactory;
}
