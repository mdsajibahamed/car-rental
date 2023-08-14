<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;



class Vehicle extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'brand_id',
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
}
