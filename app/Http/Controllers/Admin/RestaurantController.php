<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Category;
use App\Restaurant;
use App\Comment;
use App\Http\Requests\RestaurantRequest;

class RestaurantController extends BaseController
{
    public function index()
    {
        $q=request()["q"];
		$category_id=request()["category_id"];
        $status=request()["status"];
        $items = Restaurant::whereRaw(" isdelete=0 ");
        if($q!=NULL)
            $items->whereRaw("(title like ?)",["%$q%"]);
		
		if($category_id!=NULL)
            $items->whereRaw("category_id = ?",[$category_id]);
        if($status!=NULL)
            $items->whereRaw("status = ?",[$status]);
        $items = $items->paginate(10)->appends(["q"=>$q,"category_id"=>$category_id,"status"=>$status]);
		$categories = Category::all();
        return view("admin.restaurant.index",compact("items","categories","q","category_id","status"));
    }

    public function create()
    {
		$categories = Category::all();
        return view("admin.restaurant.create",compact("categories"));
    }

    public function store(RestaurantRequest $request)
    {
        $IsExists = Restaurant::where("title",$request["title"])->where("isdelete",0)->count()>0;
        if($IsExists){
            Session::flash("msg","w: العنصر المنوي ادخاله موجود مسبقا");
            return redirect("/admin/restaurant/create")->withInput();
        }
        $path = $request->file('image')->store('/public/images');
        $item = new Restaurant();
        $item->title = $request["title"];
		$item->summary = $request["summary"];
		$item->details = $request["details"];
		$item->category_id = $request["category_id"];
		$item->image = basename($path);//$request["image"];
		$item->allowcomment = $request["allowcomment"]?1:0;
        $item->status = $request["status"]?1:0;
        $item->created_by = $this->adminId;
        $item->save();
        
        Session::flash("msg","s: تمت عملية الاضافة بنجاح");
        
        return redirect("/admin/restaurant/create");
    }

    public function edit($id)
    {
        $item = Restaurant::find($id);
        if($item == NULL || $item->isdelete){
            Session::flash("msg","e: الرجاء التأكد من الرابط المطلوب");
            return redirect("/admin/restaurant");
        }
		$categories = Category::all();
        return view("admin.restaurant.edit",compact("item","categories"));
    }
    public function status($id)
    {
        //sleep(1);
        $item = Restaurant::find($id);
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
    
    public function allowcomment($id)
    {
        $item = Restaurant::find($id);
        if($item == NULL || $item->isdelete){     
            return response()->json([
                'status' => '0',
                'msg' => 'لم تتم العملية'
            ]);
        }
        $item->allowcomment = !$item->allowcomment;  
        $item->save();
        return response()->json([
            'status' => '1',
            'msg' => 'تمت العملية بنجاح'
        ]);
    }

    public function update(RestaurantRequest $request, $id)
    {
        $IsExists = Restaurant::where("title",$request["title"])
            ->where("isdelete",0)->where("id",'!=',$id)->count()>0;
        if($IsExists){
            Session::flash("msg","w: العنصر المنوي ادخاله موجود مسبقا");
            return redirect("/admin/restaurant/$id/edit")->withInput();
                     }
        $item = Restaurant::find($id);
        $item->title = $request["title"];
		$item->summary = $request["summary"];
		$item->details = $request["details"];
		$item->category_id = $request["category_id"];
        
        if($request->hasFile('image')){
            $path = $request->file('image')->store('public/images');
            $image = basename($path);
            $item->image = $image;
        }else{
            unset($request["image"]);
        }
        
        
		//$item->image = $request["image"];
		$item->allowcomment = $request["allowcomment"]?1:0;
        $item->status = $request["status"]?1:0;
        $item->updated_by = $this->adminId;
        $item->save();
        
        Session::flash("msg","i: تمت عملية الحفظ بنجاح");
        
        return redirect("/admin/restaurant");
    }
    public function destroy($id)
    {
         $item = Restaurant::find($id);
         $item->isdelete=1;
         $item->updated_by=$this->adminId;
         $item->save();
        
         Session::flash("msg","w: تمت عملية الحذف بنجاح");
        
         return redirect("/admin/restaurant");
    }
}