<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable=[
        "title"
    ];

    public function posts()
    {
        return $this->morphedByMany(Post::class,"tagable");
    }

    public function videos()
    {
        return $this->morphedByMany(Video::class,"tagable");
    }
}
