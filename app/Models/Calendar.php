<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    public $fillable = [
        'title',
        'post_lnk',
        'post_thumbinal',
        'dey_count',
        'price',
        'region',
        'dates'
    ];

    protected $casts = [
        'dates' => 'array',
    ];


}
