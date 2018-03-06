<?php

namespace mywork;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $guarded = ['id'];
    
        public function posts()
        {
            return $this->belongsToMany('mywork/Post')->withTimestamps();
        }
}
