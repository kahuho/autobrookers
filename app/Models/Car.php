<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Car extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $fillable = [
        'make',
        'model',
        'year',
        'availability',
        'current_location',
        'registration_number',
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
