<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AleanSeaHotel extends Model
{
    protected $table = 'alean_sea_hotels';

    protected $fillable = [
        'sea_destination_id',
        'sea_resort_id',
        'CID',
        'title',
        'slug',
        'geo',
        'sort_order',
        'description',
        'short_description',
        'gallery',
        'parameters',
        'before_5_price',
        'before_12_price',
        'number_prices',
        'img',
        'min_price',
        'sea_distantion',
        'numbers_type',
        'bus_direction',
        'in_price',
    ];

    protected $casts = [
        'sort_order' => 'integer',
        'gallery' => 'array',
        'parameters' => 'array',
        'number_prices' => 'array',
    ];

    public $with = ['destination', 'resort', 'busSchedules'];

    public function destination(): BelongsTo
    {
        return $this->belongsTo(SeaDestination::class, 'sea_destination_id');
    }

    public function resort(): BelongsTo
    {
        return $this->belongsTo(SeaResort::class, 'sea_resort_id');
    }

    public function busSchedules(): HasMany
    {
        return $this->hasMany(SeaBusSchedule::class, 'direction', 'bus_direction');
    }
}
