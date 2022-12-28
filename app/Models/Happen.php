<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Happen extends Model
{
    use HasFactory;

    protected $fillable = [
        'idTimetable',
        'idEvent'
    ];
}
