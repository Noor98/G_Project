<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    protected $table = "meal";
    
	public function category(){
        return $this->belongsTo('App\Category','category_id','id');
    }
    public function restaurant(){
        return $this->belongsTo('App\Restaurant','restaurant_id','id');
    }
}
