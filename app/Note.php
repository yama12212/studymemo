<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\User;

class Note extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title',
        'user_id',
        'deleted_at',
    ];

    protected $table = 'notes';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
