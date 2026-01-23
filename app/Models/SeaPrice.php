<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SeaPrice extends Model
{
    use HasFactory;

    protected $fillable = [
        'destination_id',
        'title',
        'sort_order',
    ];

    protected $casts = [
        'destination_id' => 'integer',
        'sort_order' => 'integer',
    ];

    public function destination(): BelongsTo
    {
        return $this->belongsTo(SeaDestination::class);
    }
}
