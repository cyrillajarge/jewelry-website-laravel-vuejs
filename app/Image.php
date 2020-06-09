<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['name','url'];

    public function pelements(){
        return $this->belongsToMany('App\Pelement');
    }
}
