<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'content',
        'user_id',
        'views',
        'admin',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
