<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',

        'amount',
        'currency',

        'product_id',
        'product_type',
        'product_owner',

        'payment_ref',
        'payment_status',
        'payment_channel'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
