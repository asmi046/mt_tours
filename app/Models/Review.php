<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    public $fillable = [
        'name',
        'platform',
        'img',
        'score',
        'description',
        'platform_lnk',
    ];
}
