<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Vehicle extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'brand_id',
        'type_id',
        'brand',
        'model',
        'thumbnail',
        'year',
        'type',
        'status',
        'serial_number',
        'rentamount',
        'image',
        'owner_name',
        'owner_phone',
        'seating_capacity',
        'price',
        'description'
    ];
      /**
     * Get the comments for the blog post.
     */
    public function brand(): HasMany
    {
        return $this->hasMany(Brand::class);
    }
        /**
     * Get the comments for the blog post.
     */
    public function user(): belongsTo
    {
        return $this->belongsTo(User::class);
    }
        /**
     * Get the comments for the blog post.
     */
    public function type(): BelongsTo
    {
        return $this->BelongsTo(Type::class);
    }
    //      /**
    //  * Get the comments for the blog post.
    //  */
    // public function type(): HasMany
    // {
    //     return $this->HasMany(Type::class);
    // }

    public function bookings(): HasMany {
        return $this->hasMany(Booking::class);
    }
  
}
