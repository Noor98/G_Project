<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Category;
use App\Comment;
use App\Http\Requests\RestaurantRequest;

class CommentController extends BaseController
{
    public function index()
    {
        $q=request()["q"];
        $status=request()["status"];
        $items = Comment::leftJoin("restaurant","restaurant_id","restaurant.id")
            ->whereRaw(" comment.isdelete=0 ");
        if($q!=NULL)
            $items->whereRaw("(comment like ? or restaurant.title like ?)",["%$q%","%$q%"]);
		
        if($status!=NULL)
            $items->whereRaw("comment.status = ?",[$status]);
        $items = $items->selectRaw("comment.*")->paginate(10)->appends(["q"=>$q,"status"=>$status]);
        
        return view("admin.comment.index",compact("items","q","status"));
    }

    public function destroy($id)
    {
         $item = Comment::find($id);
         $item->isdelete=1;
         $item->updated_by=$this->adminId;
         $item->save();
        
         Session::flash("msg","w: تمت عملية الحذف بنجاح");
        
         return redirect("/admin/comment");
    }
    
     public function status($id)
    {
        //sleep(1);
        $item = Comment::find($id);
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