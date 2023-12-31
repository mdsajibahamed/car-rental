<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'role_id',
        'detail_id',
        'name',
        'email',
        'password',
        'mobile_number',
        'address1'
    
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    /**
     * Get the comments for the blog post.
     */
    public function detail(): HasOne
    { 
        return $this->hasOne(Detail::class);
    }
      /**
     * Get the comments for the blog post.
     */
    public function vehicle(): HasMany
    {
        return $this->hasMany(Vehicle::class);
    }
    /**
     * Get the comments for the blog post.
     */
    public function bservice(): HasMany
    {
        return $this->hasMany(Bservice::class);
    }
    /**
     * Get the comments for the blog post.
     */
    public function constact(): HasMany
    {
        return $this->hasMany(Contact::class);
    }
}
