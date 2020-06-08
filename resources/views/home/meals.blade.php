@extends('home.layouts.app')
@section('content')



<div class="container">
    <h1 id="title">الوجبات</h1>

<form class="row">
     <div class="col-sm-3">
         
        <input type="submit" value="انطلق" class="search " />
    </div>
   
	<div class="col-sm-3">
        <select name="category_id" id="category_id" class="form-control">
            <option value="">اختيار التصنيف</option>
            @foreach($categories as $c)
                <option {{$c->id==$category_id?"selected":""}} value="{{$c->id}}">{{$c->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-sm-3">
        <select name="restaurant_id" id="restaurant_id" class="form-control">
            <option value="">اختيار الشيف</option>
            @foreach($restaurants as $c)
                <option {{$c->id==$restaurant_id?"selected":""}} value="{{$c->id}}">{{$c->title}}</option>
            @endforeach
        </select>
    </div>
     <div class="col-sm-3">
        <input autofocus value="{{$q}}" type="text" class="form-control" name="q" placeholder="ادخل كلمة البحث" />
    </div>
   
</form>

   <hr>
    @if($items->count()>0)
    <div class="container-fluid no-padding blog-list">
			<!-- container -->
			<div class="container">
					<!-- Content Area -->
						<div class="row">
                              @foreach($items as $a)
							<div class="col-md-3 col-12">
								<article class="type-post">
									<div class="entry-cover">
										<a href="blog-single.html"><img src="/storage/images/{{$a->image}}" width="580" height="436" alt="News" /></a>
									</div>
									<div class="entry-content">
										<h3 class="entry-title">
                                            <a href="/home/meal/{{$a->id}}" title="">{{$a->title}}</a></h3>
										<div class="post-date">{{$a->created_at}}</div> 
										<div class="entry-meta">
											<div class="byline">بواسطة الشيف : 
                                                <a href="/home/restaurant/{{$a->restaurant_id}}" title="">
                                                    {{$a->restaurant->title}}
                                                </a>
                                            </div>
											
										</div>
                                        <div class="entry-meta">
											<div class="byline">التصنيف:  {{$a->category->name}}</div>
											
										</div>
                                         <div class="entry-meta">
											<div class="byline">السعر:  {{$a->price}}</div>
											
										</div>
									</div>
								</article>                          
							</div>
                             @endforeach
						</div>
						
                    <!-- Content Area /- -->
			
			</div><!-- container /- -->
		</div><!-- Latest News Section /- -->
    <nav class="ow-pagination">
                          {{$items->links()}}
    </nav>
 @else

<br>
<div class="alert alert-warning"><b>نأسف</b>, لا يوجد بيانات لعرضها ...</div>
@endif
    
</div>



@endsection

    