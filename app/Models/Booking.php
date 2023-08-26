<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'vehicle_id',
        'location_from',
        'location_to',
        'pickup_date',
        'return_date',
        'total_days',
        'status',
        // 'total_amount',
        'add_payment'
    ];

    public function vehicle(): BelongsTo {
        return $this->belongsTo(Vehicle::class);
    }
}
