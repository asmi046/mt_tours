<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Resort extends Model
{
    use HasFactory;

    protected $fillable = [
        'destination_id',
        'title',
        'subtitle',
        'slug',
        'sort_order',
        'description',
    ];

    protected $casts = [
        'destination_id' => 'integer',
        'sort_order' => 'integer',
    ];

    public function destination(): BelongsTo
    {
        return $this->belongsTo(Destination::class);
    }

    public function hotels(): HasMany
    {
        return $this->hasMany(Hotel::class);
    }
}
