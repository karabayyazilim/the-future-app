<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class MovieCharacter extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'movie_id',
        'character_id',
    ];
}
