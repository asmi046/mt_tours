<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeaPrice extends Model
{
    use HasFactory;

    protected $fillable = [
        'viezd',
        'vozvrashenie',
        'june_day_count',
        'july_day_count',
        'august_day_count',
        'september_day_count',
        'direction',
        'sort_order',
    ];

    protected $casts = [
        'june_day_count' => 'integer',
        'july_day_count' => 'integer',
        'august_day_count' => 'integer',
        'september_day_count' => 'integer',
        'sort_order' => 'integer',
    ];
}
