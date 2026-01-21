<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Destination extends Model
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
        return $this->hasMany(Price::class);
    }

    public function resorts(): HasMany
    {
        return $this->hasMany(Resort::class);
    }

    public function hotels(): HasMany
    {
        return $this->hasMany(Hotel::class);
    }
}
