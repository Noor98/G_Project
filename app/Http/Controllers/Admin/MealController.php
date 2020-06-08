<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Category;
use App\Restaurant;
use App\Meal;
use App\Http\Requests\MealRequest;
use App\Http\Requests\MealRequestEdit;


class MealController extends BaseController
{
    public function index()
    {
        $q=request()["q"];
		$category_id=request()["category_id"];
        $restaurant_id=request()["restaurant_id"];
        $price=request()["price"];
        $status=request()["status"];
        $items = Meal::whereRaw(" isdelete=0 ");
        if($q!=NULL)
            $items->whereRaw("(title like ?)",["%$q%"]);
		if($category_id!=NULL)
            $items->whereRaw("category_id = ?",[$category_id]);
        if($restaurant_id!=NULL)
            $items->whereRaw("restaurant_id = ?",[$restaurant_id]);
        if($status!=NULL)
            $items->whereRaw("status = ?",[$status]);
        $items = $items->paginate(10)->appends(["q"=>$q,"category_id"=>$category_id,"restaurant_id"=>$restaurant_id,
                "status"=>$status]);
		$categories = Category::all();
		$restaurants = Restaurant::all();
        
        return view("admin.meal.index",compact("items","categories","restaurants","q",
                              "category_id","restaurant_id","status"));
    }

    public function create()
    {
		$categories = Category::all();
        $restaurants=Restaurant::all();
        return view("admin.meal.create",compact("categories","restaurants"));
    }

    public function store(MealRequest $request)
    {
        
        $path = $request->file('image')->store('public/images');
        $item = new Meal();
        $item->title = $request["title"];
		$item->details = $request["details"];
        $item->price = $request["price"];
		$item->category_id = $request["category_id"];
        $item->restaurant_id = $request["restaurant_id"];
		$item->image = basename($path);//$request["image"];
        $item->status = $request["status"]?1:0;
        $item->created_by = $this->adminId;
        $item->save();
        
        Session::flash("msg","s: تمت عملية الاضافة بنجاح");
        
        return redirect("/admin/meal/create");
    }

    public function edit($id)
    {
      
        $item = Meal::find($id);
        if($item == NULL || $item->isdelete){
            Session::flash("msg","e: الرجاء التأكد من الرابط المطلوب");
            return redirect("/admin/meal");
        }
		$categories = Category::all();
        $restaurants=Restaurant::all();
        return view("admin.meal.edit",compact("item","categories","restaurants"));
        
    }
    
   

    public function update(MealRequest $request, $id)
    {
        
        $item = Meal::find($id);
        $item->title = $request["title"];
		$item->details = $request["details"];
        $item->price = $request["price"];
		$item->category_id = $request["category_id"];
        $item->restaurant_id = $request["restaurant_id"];
        
        if($request->hasFile('image')){
            $path = $request->file('image')->store('public/images');
            $image = basename($path);
            $item->image = $image;
        }else{
            unset($request["image"]);
        }
       // $item->image = $request["image"];
        $item->status = $request["status"]?1:0;
        $item->updated_by = $this->adminId;
        $item->save();
        
        Session::flash("msg","i: تمت عملية الحفظ بنجاح");
        
        return redirect("/admin/meal");
    }
    
    
    public function destroy($id)
    {
     
        $item = Meal::find($id);
         $item->isdelete=1;
         $item->updated_by=$this->adminId;
         $item->save();
        
         Session::flash("msg","w: تمت عملية الحذف بنجاح");
        
         return redirect("/admin/meal");
        
    }
    
    
    public function status($id)
    {
        //sleep(1);
        $item = Meal::find($id);
        if($item == NULL || $item->isdelete){           
            return response()->json([
                'status' => '0',
                'msg' => 'لم تتم العملية'
            ]);
        }
        $item->status = !$item->status;
        $item->save();
        return response()->json([
            'status' => '1',
            'msg' => 'تمت العملية بنجاح'
        ]);
    }
    
    
}