<?php

namespace mywork;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $guarded = ['id'];

    public function categories()
    {
        return $this->belongsToMany('mywork/Category')->withTimestamps();
    }
}
