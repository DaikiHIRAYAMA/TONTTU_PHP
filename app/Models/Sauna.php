<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sauna extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'sauna_temperature',
        'sauna_humidity',
        'water_temperature',
        'user_id'
    ];
};
