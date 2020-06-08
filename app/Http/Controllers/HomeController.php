<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use App\Restaurant;
use App\Meal;
use App\Comment;
use App\Category;
use Auth;
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::where("isdelete",0)->where("status",1)
            ->limit(3)->orderBy("created_at","desc")->get();
        
      /* $top8Articles = Restaurant::where("isdelete",0)->where("status",1)
            ->limit(12)->orderBy("created_at","desc")->get();*/
        return view('home.index',compact('sliders'));
               

    }
   
    
    public function restaurants()
    {
        $q=request()["q"];
        
		$category_id=request()["category_id"];
        $items = Meal::whereRaw(" isdelete=0 and status=1 ");
        $last_items = Meal::where("isdelete",0)->where("status",1)
            ->limit(3)->orderBy("created_at","desc")->get();
        $chefs = Restaurant::whereRaw(" isdelete=0 and status=1 ")->limit(4)->orderBy("created_at","desc")->get();
        if($q!=NULL)
            $items->whereRaw("(title like ?)",["%$q%"]);
		if($category_id!=NULL)
            $items->whereRaw("category_id = ?",[$category_id]);
        
        $items = $items->paginate(12)->appends(["q"=>$q,"category_id"=>$category_id]);
		$categories = Category::all();

        return view("home.restaurants",compact("items","last_items","chefs","categories","q","category_id"));
    }
    
   
    
    public function meals()
    {
       $q=request()["q"];
      
		$category_id=request()["category_id"];
        $restaurant_id=request()["restaurant_id"];
        $items = Meal::whereRaw(" isdelete=0 and status=1 ");
        if($q!=NULL)
            $items->whereRaw("(title like ?)",["%$q%"]);
		if($category_id!=NULL)
            $items->whereRaw("category_id = ?",[$category_id]);
        if($restaurant_id!=NULL)
            $items->whereRaw("restaurant_id = ?",[$restaurant_id]);
        
        $items = $items->paginate(12)->appends(["q"=>$q,"category_id"=>$category_id,"restaurant_id"=>$restaurant_id]);
		$categories = Category::all();
        $restaurants = Restaurant::all();

        return view("home.meals",compact("items","categories","restaurants","q","category_id","restaurant_id"));         

    }
    
     public function meal($id)
    {

        $meal = Meal::find($id);
        $category_id= $meal->category_id;
        $restaurant_id= $meal->restaurant_id;
         //dd($category_id);
         $items = Meal::whereRaw("category_id = ?",[$category_id])->limit(3)->orderBy("created_at","desc")->get();
       //  dd($items);
         $comon_items = Meal::whereRaw("restaurant_id = ?",[$restaurant_id])->limit(3)->orderBy("created_at","desc")->get();
        // dd($comon_items);
        if($meal==NULL || !$meal->status || $meal->isdelete)
        return redirect('/');
        //dd($items);
                           
        return view("home.meal",compact('meal','items','comon_items'));
    }
    
    public function about()
    {
      
                            
        return view("home.about");
    }
       public function chef()
    {
      
                            
        return view("home.chef");
    }
    
     public function restaurant($id)
    {
         $restaurant = Restaurant::find($id);
         $category_id= $restaurant->category_id;
         $items = Meal::whereRaw("restaurant_id = ?",[$id])->limit(3)->orderBy("created_at","desc")->get();
        // dd($items);
         //$last_items = Meal::where("isdelete",0)->where("status",1)
          //  ->limit(3)->orderBy("created_at","desc")->get();
      //  if($restaurant==NULL || !$restaurant->status || $restaurant->isdelete)
        //    return redirect('/');
         $chefs = Restaurant::whereRaw(" category_id = ?",[$category_id] )->limit(3)->orderBy("created_at","desc")->get();
        return view('home.restaurant',compact('restaurant','items','chefs'));
    }
    
    public function postcomment($id,Request $request)
    {
        //dd($id);
        $request->validate([
            'comment' => 'required|max:255'
        ]);
        $comment= new Comment();
        $comment->comment=$request["comment"];
        $comment->restaurant_id=$id;
        $comment->user_id=Auth::user()->id;
        $comment->status=1;
        $comment->save();
        
        
        Session::flash("msg","s: تمت عملية الاضافة بنجاح");
        return redirect("/home/restaurant/$id");
    }
}
