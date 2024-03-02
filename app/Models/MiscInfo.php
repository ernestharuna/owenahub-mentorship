<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MiscInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'expertise',
        'skills',
        'bio'
    ];
}
