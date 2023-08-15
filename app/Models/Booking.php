<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'detail_id',
        'vehicle_id',
        'location_from',
        'location_to',
        'pickup_date',
        'return_date',
        'total_days',
        'status',
        'total_amount'
    ];
}
