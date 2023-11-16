<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SliceEnrollment extends Model
{
    use HasFactory;

    protected $fillable = [
        'completed'
    ];

    public function slice(): BelongsTo
    {
        return $this->belongsTo(Slice::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
