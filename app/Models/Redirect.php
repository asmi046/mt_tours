<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Redirect extends Model
{
    protected $fillable = [
        'from',
        'to',
        'type',
        'active',
    ];

    protected function casts(): array
    {
        return [
            'type' => 'integer',
            'active' => 'boolean',
        ];
    }

    public function scopeActive($query)
    {
        return $query->where('active', true);
    }

    public static function flushCache(): void
    {
        cache()->forget('redirects.active');
    }

    protected static function booted(): void
    {
        static::saved(fn () => static::flushCache());
        static::deleted(fn () => static::flushCache());
    }
}
