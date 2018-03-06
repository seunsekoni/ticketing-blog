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
        return $this->belongsTo('mywork\User');
    }

    
    // returns the title of the ticket
    public function getTitle()
    {
        return $this->title;
    }

    // tickets table has a foreign key rel with the comments table
    public function comments()
    {
        return $this->hasMany('mywork\Comment', 'post_id');
    }

}
