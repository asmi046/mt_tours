<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Hotel extends Model
{
    use HasFactory;

    protected $fillable = [
        'destination_id',
        'resort_id',
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

    public function destination(): BelongsTo
    {
        return $this->belongsTo(Destination::class);
    }

    public function resort(): BelongsTo
    {
        return $this->belongsTo(Resort::class);
    }
}
