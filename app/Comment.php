<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = "comment";
    
	public function restaurant(){
        return $this->belongsTo('App\Restaurant','restaurant_id','id');
    }
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
