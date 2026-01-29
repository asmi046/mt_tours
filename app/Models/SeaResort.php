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
        'subtitle',
        'slug',
        'sort_order',
        'description',
    ];

    protected $casts = [
        'sea_destination_id' => 'integer',
        'sort_order' => 'integer',
    ];

    public function destination(): BelongsTo
    {
        return $this->belongsTo(SeaDestination::class, 'sea_destination_id', 'id');
    }

    public function hotels(): HasMany
    {
        return $this->hasMany(SeaHotel::class);
    }
}
