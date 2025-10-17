<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ScholTour extends Model
{
    protected $fillable = [
        'order',
        'img',
        'title',
        'description',
    ];

    protected $casts = [
        'order' => 'integer',
    ];
}
