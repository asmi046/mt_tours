<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class TourCategory extends Model
{
    public $fillable = [
        "parentid",
        "order",
        "name",
        "slug",
        "template_name",
        "description"
    ];

    public function tours(): BelongsToMany
    {
        return $this->belongsToMany(Tour::class);
    }
}
