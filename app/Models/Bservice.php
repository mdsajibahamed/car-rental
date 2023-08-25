<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Bservice extends Model
{
    use HasFactory;
    protected $fillable =[
        'user_id',
        'service_id',
        'service_type', 
        'date',
        'location',
        'payment_type',
        'amount',

    ];
     /**
     * Get the comments for the blog post.
     */
    public function service(): BelongsTo
    {
        return $this->BelongsTo(Service::class);
    }
     /**
     * Get the comments for the blog post.
     */
    public function user(): BelongsTo
    {
        return $this->BelongsTo(User::class);
    }
}
