<?php

namespace mywork;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    protected $guarded = ['id'];
    
    //telling comment model that it belongs to the ticket model
    public function ticket()
    {
        return $this->belongsTo('mywork\Ticket');
    }
}
