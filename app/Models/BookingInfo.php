<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BookingInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'mentor_id',
        'user_id',
        'booking_id',
        'content'
    ];

    /**
     * Get the booking that owns the BookingInfo
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function booking(): BelongsTo
    {
        return $this->belongsTo(Booking::class);
    }
}
