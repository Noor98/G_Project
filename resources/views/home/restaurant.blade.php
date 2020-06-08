@extends('home.layouts.app')
@section('content')







<!-- Page Banner Section -->
		<div class="page-banner blog-banner container-fluid no-padding">
			<h2>{{$restaurant->title}}</h2>
		</div>
<!-- Banner Section /- -->

		<div class="container mealDetails" style="padding: 50px 0;">
			<div class="row meal-details">
				 
				<div class="col-md-8 col-12">
					<h3 class="widget-title">{{$restaurant->title}}</h3>
					<p>
					{{$restaurant->summary}}	
					</p>
                    <p>
					{{$restaurant->details}}	
					</p>
					<h5>التصنيف : <span>{{$restaurant->category->name}}</span></h5>
				</div>
                <div class="col-md-4 col-12">
					<img src="/storage/images/{{$restaurant->image}}"> 
				</div> 
			</div>
             
            <br> <br>
            
            
			<div class="row" style="padding: 20px 0;">
				<h3 class="widget-title">أشهر الأكلات</h3>
                
				               
@foreach($items as $a)
				<div class="col-md-4 col-12">
					<article class="type-post">
						<div class="entry-cover">
							<a href="">
                                <img src="/storage/images/{{$a->image}}" width="300" height="436" alt="News" /></a>
						</div>
						<div class="entry-content">
							<h3 class="entry-title"><a href="/home/meal/{{$a->id}}" title="">{{$a->title}}</a></h3>
							<div class="post-date"><span>21</span>مايو, 20</div>
							<div class="entry-meta">
								
								
							</div>
						</div>
					</article>
				</div>
@endforeach       
				
			</div>
            
            
            
			<div class="row top-cheifs" style="padding: 20px 0;">
				<h3 class="widget-title1">شيفات من نفس التصنيف</h3>
                
@foreach($chefs as $a)
				<div class="col-md-4 col-12">
					<div class="cheif-box">
						<img src="/storage/images/{{$a->image}}">
						<h4>{{$a->title}}</h4>
						<p>
						</p>
						<a href="/home/restaurant/{{$a->id}}">مشاهدة المزيد</a>
					</div>
				</div>
                
@endforeach				
				
			</div>
            
            
            
			<div class="row comments">
				<div class="col-12">
					<h3 class="widget-title1">التعليقات </h3>
					<div class="col-12">
                        
    @if($restaurant->comments->count()>0)
        @foreach($restaurant->comments as $c)
                        
						<div class="comment-box">
							<h5><strong>{{$c->user->name}}</strong></h5>
							<p>
                                    {{$c->comment}}	
                            </p>
							<ul>
								<li>
									<h6><strong>التاريخ و الوقت : <span>{{$c->created_at}}</span></strong></h6>
								</li>
								
							</ul>
						</div>
        @endforeach
    @endif
                        
					</div>
                    
    @if($restaurant->allowcomment)
      @guest
                    <div class="jumbotron">
                  <h3>لاضافة تعليقك</h3>
                    <p>يجب ان تكون عضو مسجل لدينا للتسجيل 

                        <a href="/register">اضغط هنا</a>
                        </p>
                     </div>
                    
    @else                
					<div class="col-12">
						<div class="add-comment-box">
							
							<form method="post" action="/home/restaurant/{{$restaurant->id}}">
                                {{csrf_field()}}
                                <h4 for="comment" >أضف تعليق</h4>
                                @include("_msg")
								<textarea maxlength="255" class="form-control" id="comment" name="comment">
									{{old("comment")}}
								</textarea>
								<input type="submit" name="أضف الآن">
							</form>
						</div>
					</div>
                    
      @endguest
    @endif
				</div>
			</div>
            
            
             <div class="row" >
                <a href="/home/meals">
                <h3 class="widget-title">أبحث عن شيف معين </h3>
                </a>
            </div>
            
            
		</div>








@endsection