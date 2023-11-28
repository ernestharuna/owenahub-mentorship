<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserBite extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'bite_id',
        'completed'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function bite(): BelongsTo
    {
        return $this->belongsTo(Bite::class);
    }
}
