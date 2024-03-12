<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'session_id',
        'user_id',
        'topic',
        'status'
    ];

    /**
     * Get the session that owns the Booking
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function session(): BelongsTo
    {
        return $this->belongsTo(Session::class);
    }

    /**
     * Get all of the booking_info for the Booking
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function booking_info(): HasMany
    {
        return $this->hasMany(BookingInfo::class);
    }
}
