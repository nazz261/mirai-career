<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JlptClass extends Model
{
    use HasFactory;

    protected $fillable = [
        'level',
        'day',
        'start_time',
        'end_time',
        'teacher',
        'location',
        'seats',
        'price',
        'status',
    ];
}
