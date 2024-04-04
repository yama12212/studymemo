<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'post',
        'user_id',
        'note_id'
    ];

    protected $table = 'posts';
}
