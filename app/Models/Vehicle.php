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
        'rentamout',
        'image',
        'owner_name',
        'phone',
        'seating_capacity'
    ];
}
