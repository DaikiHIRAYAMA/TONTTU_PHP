<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timer extends Model
{
    use HasFactory;

    protected $fillable = [

        'sauna_start_time',
        'sauna_end_time',
        'water_start_time',
        'water_end_time',
        'outside_start_time',
        'outside_end_time',
        'user_id',
        'sauna_id',
    ];
}
