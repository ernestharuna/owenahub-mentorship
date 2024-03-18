<?php

namespace App\Models;

use App\Events\BookingConfirmed;
use App\Events\BookingCreated;
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

    protected $dispatchesEvents = [
        'created' => BookingCreated::class,
        'updated' => BookingConfirmed::class
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

    /**
     * Get the user that owns the Booking
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
