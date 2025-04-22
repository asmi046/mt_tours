<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tour extends Model
{
    use HasFactory;

    public $fillable = [
        'order',
        'out_lnk',
        'title',
        'title_card',
        'title_input',
        'slug',
        'img',
        'deycount',
        'start_data',
        'top_description',
        'program',
        'in_price',
        'out_price',
        'galery',
        'tour_program',
        'multi_data',
        'prices'
    ];

    public $casts = [
        'multi_data' => 'array',
        'tour_program' => 'array',
        'galery' => 'array',
        'prices' => 'array',
    ];

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(TourCategory::class);
    }

    public function setSlugAttribute($value)
    {
        if (empty($value))
            $this->attributes['slug'] =  Str::slug($this->title);
        else
            $this->attributes['slug'] =  $value;
    }
}
