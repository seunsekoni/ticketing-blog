<?php

namespace mywork;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = ['title', 'content', 'slug', 'status', 'user_id'];

    // protected $guarded =['id'];
    // returns user that created a ticket
    public function User()
    {
        return $this->belongsTo('app\User');
    }

    
    // returns the title of the ticket
    public function getTitle()
    {
        return $this->title;
    }

    public function comments()
    {
        return $this->hasMany('mywork\Comment', 'post_id');
    }

}
