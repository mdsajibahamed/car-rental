<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Service extends Model
{
    use HasFactory; 
    protected $fillable =[ 
        'title',
        'highlights',
        'description',
        'image',
        'price',
        'status'
        
    ];
    /**
     * Get the comments for the blog post.
     */
    public function bservice(): HasMany
    {
        return $this->hasMany(Bservice::class);
    }

}
