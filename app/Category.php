<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "category";
    
    public function restaurants(){
        return $this->hasMany("App\Restaurant","category_id","id");
    }  
}
