<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SeaHotel extends Model
{
    use HasFactory;

    protected $fillable = [
        'sea_destination_id',
        'sea_resort_id',
        'title',
        'slug',
        'sort_order',
        'description',
        'short_description',
        'gallery',
        'parameters',
    ];

    protected $casts = [
        'destination_id' => 'integer',
        'resort_id' => 'integer',
        'sort_order' => 'integer',
        'gallery' => 'array',
        'parameters' => 'array',
    ];

    public $with = ['destination', 'resort'];

    public function destination(): BelongsTo
    {
        return $this->belongsTo(SeaDestination::class, 'sea_destination_id');
    }

    public function resort(): BelongsTo
    {
        return $this->belongsTo(SeaResort::class, 'sea_resort_id');
    }
}
