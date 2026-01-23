<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SeaDestination extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'sort_order',
    ];

    protected $casts = [
        'sort_order' => 'integer',
    ];

    public function prices(): HasMany
    {
        return $this->hasMany(SeaPrice::class);
    }

    public function resorts(): HasMany
    {
        return $this->hasMany(SeaResort::class);
    }

    public function hotels(): HasMany
    {
        return $this->hasMany(SeaHotel::class);
    }
}
