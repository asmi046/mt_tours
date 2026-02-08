<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SeaResort extends Model
{
    use HasFactory;

    protected $fillable = [
        'sea_destination_id',
        'title',
        'page_title',
        'page_subtitle',
        'subtitle',
        'slug',
        'sort_order',
        'description',
    ];

    protected $casts = [
        'sea_destination_id' => 'integer',
        'sort_order' => 'integer',
    ];

    protected $with = ['busSchedules'];

    public function destination(): BelongsTo
    {
        return $this->belongsTo(SeaDestination::class, 'sea_destination_id', 'id');
    }

    public function hotels(): HasMany
    {
        return $this->hasMany(SeaHotel::class, 'sea_resort_id', 'id');
    }

    public function busSchedules(): HasMany
    {
        return $this->hasMany(SeaBusSchedule::class, 'direction', 'bus_schedule');
    }
}
