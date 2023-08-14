<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Detail extends Model
{
    use HasFactory;
    protected $fillable =[
        'user_id',
        'date_of_birth',
        'gender',
        'mobile_number',
        'address1',
        'address2',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);

    }
}
