<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title', 'article', 'videoURL','imageURL','coach_id'
    ];

    public function coach()
    {
        return $this->belongsTo(User::class, 'coach_id', 'id');
    }
}
