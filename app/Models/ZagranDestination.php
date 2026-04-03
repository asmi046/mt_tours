<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ZagranDestination extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'name',
        'flag',
        'img',
        'order',
        'slug',
        'departure_cities',
        'resorts_list',
        'min_days',
        'min_price',
        'search_script',
        'hot_tours_script',
        'description',
    ];

    protected $casts = [
        'order' => 'integer',
        'min_price' => 'decimal:2',
    ];

    protected $with = ['resorts'];

    public function resorts(): HasMany
    {
        return $this->hasMany(ZagranResort::class, 'zagran_destination_id', 'id');
    }
}
