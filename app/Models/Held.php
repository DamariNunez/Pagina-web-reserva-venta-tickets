<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Held extends Model
{
    use HasFactory;

    protected $fillable = [
        'idEvent',
        'idPlace',
        'date',
        'time'        
    ];
}
