<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Slice extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'category',
        'is_paid',
        'price',
        'image_path'
    ];

    public function admin(): BelongsTo
    {
        return $this->belongsTo(Admin::class);
    }

    public function mentor(): BelongsTo
    {
        return $this->belongsTo(Mentor::class);
    }

    public function bite(): HasMany
    {
        return $this->hasMany(Bite::class);
    }
}
