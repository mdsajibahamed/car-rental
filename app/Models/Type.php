<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;



class Type extends Model
{
    use HasFactory;
    protected $fillable =[
        'title',
        'description',
        'status'
    ];
   
      /**
     * Get the comments for the blog post.
     */
    public function vehicle(): HasMany
    {
        return $this->hasMany(Vehicle::class);
    }

    // public function vehicle(): BelongsTo
    // {
    //     return $this->belongsTo(Vehicle::class);

    // }
}
