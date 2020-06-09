<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelement extends Model
{
    protected $fillable = ['name','title','content'];

    public function page(){
        return $this->belongsToOne('App\Page');
    }

    public function images(){
        return $this->belongsToMany('App\Image');
    }
}
