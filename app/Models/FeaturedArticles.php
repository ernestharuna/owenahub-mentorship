<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FeaturedArticles extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'content',
        'published',
        'category',
        'image_path'
    ];

    public function admin(): BelongsTo
    {
        return $this->belongsTo(Admin::class);
    }
}
