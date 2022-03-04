<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovieCommentRate extends Model
{
    use HasFactory;

    protected $fillable = [
        'like',
        'dislike',
        'comment_id',
        'user_id',
    ];
}
