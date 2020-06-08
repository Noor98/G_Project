@extends("admin._layout")

@section("title")
تعديل الصنف 
@endsection

@section("css")
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="/metronic/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="/metronic/assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="/metronic/assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="/metronic/assets/global/plugins/clockface/css/clockface.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
@endsection

@section("content")
<form action="/admin/meal/{{$item->id}}"  method="post" class="form-horizontal">
    {{csrf_field()}}
    <input type="hidden" name="_method" value="put" /> 
    
  <div class="form-group">
    <label for="title" class="col-sm-2 control-label">اسم الصنف </label>
    <div class="col-sm-10 col-md-5">
      <input autofocus type="text" class="form-control" value="{{$item->title}}" 
             id="title" name="title" >
    </div>
  </div>
 
  <div class="form-group">
    <label for="details" class="col-sm-2 control-label">مكونات الصنف </label>
    <div class="col-sm-10 col-md-7">
        <textarea  id="details" rows="7" name="details" value="{{$item->details}}" class="form-control"> {{$item->details}} </textarea>
    </div>
  </div> 
    
     <div class="form-group">
    <label for="price" class="col-sm-2 control-label">سعر الصنف </label>
    <div class="col-sm-10 col-md-5">
      <input autofocus type="number"  min="0" max="" step="0.1" class="form-control"  
             value="{{$item->price}}" id="price" name="price"  >
    </div>
  </div>
    
    
    
    
   
    
    
    
    
    
    <div class="form-group">
    <label for="image" class="col-sm-2 control-label">صورة الصنف</label>
    <div class="col-sm-10 col-md-5">
      <input type="file" value="{{$item->image}}"  name="image" />
    </div>
  </div> 
    
     <div class="form-group">
    <label for="category_id" class="col-sm-2 control-label">التصنيف</label>
    <div class="col-sm-5">
        <select required name="category_id" id="category_id" class="form-control">
            <option value="">اختيار التصنيف</option>
            @foreach($categories as $c)
                <option {{$c->id==$item->category_id?"selected":""}} value="{{$c->id}}">{{$c->name}}</option>
            @endforeach
        </select>
    </div>
  </div>
  
    
      <div class="form-group">
    <label for="restaurant_id" class="col-sm-2 control-label">الشيف</label>
    <div class="col-sm-5">
        <select required name="restaurant_id" id="restaurant_id" class="form-control">
            <option value="">اختيار الشيف</option>
            @foreach($restaurants as $c)
                <option {{$c->id==$item->restaurant_id?"selected":""}} value="{{$c->id}}">{{$c->title}}</option>
            @endforeach
        </select>
    </div>
  </div>
    
  
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <input {{$item->status?"checked":""}} name="status" type="checkbox"> فعال
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">اضافة</button>
        <a href="/admin/meal" class="btn btn-default">الغاء الامر</a>
    </div>
  </div>
</form>
@endsection

@section("js")
 <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="/metronic/assets/global/plugins/moment.min.js" type="text/javascript"></script>
        <script src="/metronic/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js" type="text/javascript"></script>
        <script src="/metronic/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
        <script src="/metronic/assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
        <script src="/metronic/assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
        <script src="/metronic/assets/global/plugins/clockface/js/clockface.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="/metronic/assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="/metronic/assets/pages/scripts/components-date-time-pickers.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
@endsection