<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reading extends Model
{
    use HasFactory;

    protected $fillable = [
        'sensor_reading',
        'sensor_voltage',
        'temperature',
        'pressure',
        'humidity',
        'gas',
        'altitude',
        'created_at',
        'updated_at',
    ];
}
