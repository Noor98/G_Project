<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Meal;

class TestController extends Controller
{
     public function index()

     {
  public function chef()
    {
        $meal = Meal::find(8);
     return   $category_id= $meal->category;
//        $items = Meal::whereRaw(" category_id = ?",[$category_id]);
//        //$items->whereRaw("category_id = ?",[$category_id]);
//        if($meal==NULL || !$meal->status || $meal->isdelete) return redirect('/');
        
      
//      return $meal;
              $category_id= $meal->category_id;
لا
                          
//        return view("home.chef",compact('meal','items'));
    }
    
     }
}
