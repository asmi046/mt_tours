<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SeaWayPrice extends Model
{
    use HasFactory;

    protected $fillable = [
        'city',
        'order',
        'bus_schedule',
        'two_way',
        'one_way',
    ];

    protected $casts = [
        'order' => 'integer',
        'two_way' => 'float',
        'one_way' => 'float',
    ];

    public function busSchedules(): HasMany
    {
        return $this->hasMany(SeaBusSchedule::class, 'direction', 'bus_schedule');
    }
}
