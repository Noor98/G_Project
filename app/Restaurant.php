<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $table = "restaurant";
    
	public function category(){
        return $this->belongsTo('App\Category','category_id','id');
    }
    public function comments(){
        return $this->hasMany('App\Comment','restaurant_id','id');
    }
}
