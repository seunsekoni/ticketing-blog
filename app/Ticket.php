<?php

namespace mywork;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
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
}
