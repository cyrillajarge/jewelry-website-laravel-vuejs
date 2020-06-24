<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name', 'description', 'image_id'
    ];

    public function products(){
        return $this->hasMany('App\Product');
    }

    public function image(){
        return $this->hasOne('App\Image');
    }
}
