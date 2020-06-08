@extends('home.layouts.app')
@section('content')


<!-- Page Banner Section -->
		<div class="page-banner blog-banner container-fluid no-padding">
			<h2>{{$meal->title}}</h2>
		</div>
<!-- Banner Section /- -->
		<div class="container mealDetails" style="padding: 50px 0;">
			<div class="row meal-details">
				<div class="col-md-4 col-12">
					<img src="/storage/images/{{$meal->image}}"  width="330" height="400" >
				</div>
                
				<div class="col-md-8 col-12">
					<h3 class="widget-title"> {{$meal->title}}</h3>
					<p>
					{{$meal->details}}	
					</p>
                    <h5>السعر : <span>{{$meal->price}}</span></h5>
					<h5>بواسطة : <a href="/home/restaurant/{{$meal->restaurant_id}}">
                        <span>{{$meal->restaurant->title}}</span></a></h5>
					<h5>التصنيف : <span>{{$meal->category->name}}</span></h5>
				</div>
			</div>
            <br> <br>
            
           
			<div class="row" style="padding: 20px 0;">
				<h3 class="widget-title">أكلات مشابهة</h3>
                
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
								<div class="byline">بواسطة الشيف : 
                                    <a href="/home/restaurant/{{$a->restaurant_id}}" 
                                       title="Admin">{{$a->restaurant->title}}</a></div>
								
							</div>
						</div>
					</article>
				</div>
 @endforeach                
				
				
			</div>
            
            
            
			<div class="row" style="padding: 20px 0;">
				<h3 class="widget-title">أكلات  لنفس الشيف</h3>
@foreach($comon_items as $c)                
				<div class="col-md-4 col-12">
					<article class="type-post">
						<div class="entry-cover">
							<a href=""><img src="/storage/images/{{$c->image}}" width="300" height="436" alt="News" /></a>
						</div>
						<div class="entry-content">
							<h3 class="entry-title"><a href="/home/meal/{{$c->id}}" title="The ship set ground on the shore of this uncharted desert"> {{$c->title}}</a></h3>
							<div class="post-date"><span>21</span>مايو, 20</div>
							<div class="entry-meta">
								<div class="byline">بواسطة الشيف :
                                    <a href="/home/restaurant/{{$c->restaurant_id}}" title="Admin">
                                        {{$c->restaurant->title}}</a></div>
								
							</div>
						</div>
					</article>
				</div>
 @endforeach 				
				
			</div>
            
            <div class="row" style="padding: 20px 0;">
                <a href="/home/meals">
                <h3 class="widget-title">أبحث عن وجبة معينة </h3>
                </a>
            </div>
            
		</div>




@endsection