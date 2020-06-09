<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{

    protected $fillable = ['name', 'slug'];

    public function parent(){
        return $this->belongsTo('App\Page','id');
    }

    public function children(){
        return $this->hasMany('App\Page','parent_id','id');
    }

    public function pelements(){
        return $this->hasMany('App\Pelement');
    }
}
