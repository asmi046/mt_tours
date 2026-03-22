<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ZagranResort extends Model
{
    use HasFactory;

    protected $fillable = [
        'zagran_destination_id',
        'title',
        'img',
        'order',
        'slug',
        'hot_tours_script',
        'description',
    ];

    protected $casts = [
        'zagran_destination_id' => 'integer',
        'order' => 'integer',
    ];

    public function destination(): BelongsTo
    {
        return $this->belongsTo(ZagranDestination::class, 'zagran_destination_id', 'id');
    }
}
