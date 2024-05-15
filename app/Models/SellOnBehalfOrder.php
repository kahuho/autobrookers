<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellOnBehalfOrder extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $fillable = [
        'registration_number',
        'make',
        'model',
        'mileage',
        'year_of_manufacture',
        'accident_history',
        'asking_price',
        'location',
        'first_name',
        'last_name',
        'phone_number',
        'email',
        'id_number',
    ];
}
