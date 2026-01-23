<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SeaBusSchedule extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'direction',
        'title',
        'sort_order',
    ];
}
