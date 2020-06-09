<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'name','description','date', 'begin_time', 'end_time', 'location'
    ];
    
}
