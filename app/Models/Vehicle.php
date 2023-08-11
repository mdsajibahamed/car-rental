<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;
    protected $fillable = [
        'make',
        'model',
        'thumbnail',
        'year',
        'type',
        'status',
        'serial_number',
        'rentamout',
        'image',
        'owner_name',
        'owner_phone',
        'seating_capacity',
        'price'
    ];
}
