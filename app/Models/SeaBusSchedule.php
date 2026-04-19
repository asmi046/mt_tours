<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SeaBusSchedule extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'direction',
        'start_date',
        'up_price',
        'end_date',
        'sort_order',
    ];

    protected $casts = [
        'sort_order' => 'integer',
        'up_price' => 'float',
    ];
}
