<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drivers extends Model
{
    public function buses(){
        return $this->belongsTo(Buses::class);
    }
    use HasFactory;
}
