<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'category_id','name','description'
    ];

    public function images(){
        return $this->belongsToMany('App\Image');
    }

    public function categories(){
        return $this->belongsTo('App\Category');
    }
}
