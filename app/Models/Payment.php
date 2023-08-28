<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = [
          'booking_id',
          'payment_date',
          'payment_type',
          'trxid',
          'amount',
          'status'
    ];
    
}
