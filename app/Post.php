<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\User;
use App\Note;

class Post extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title',
        'post',
        'user_id',
        'note_id'
    ];

    protected $table = 'posts';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function note()
    {
        return $this->belongsTo(Note::class);
    }
}
