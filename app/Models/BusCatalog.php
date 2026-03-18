<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusCatalog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'order',
        'description',
        'gallery',
    ];

    protected $casts = [
        'order' => 'integer',
        'gallery' => 'array',
    ];
}
