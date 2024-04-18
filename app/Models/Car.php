<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'make',
        'model',
        'year',
        'availability',
        'current_location',
        'mileage',
        'price',
        'description',
        'drive',
        'horse_power',
        'transmission',
        'torque',
        'fuel_type',
        'engine_size',
        'accident_history',
        'images',

    ];

    protected $casts = [
        'images' => 'array',
    ];
}
