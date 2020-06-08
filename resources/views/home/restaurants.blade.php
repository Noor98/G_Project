@extends('home.layouts.app')
@section('content')




<!-- Page Banner Section -->

		<div class="page-banner blog-banner container-fluid no-padding">
			<h2>قائمة مأكولاتنا</h2>
		</div>
<!-- Banner Section /- -->
		
		<div class="section-padding"></div>
		
		<!-- Blog Section -->
		<div class="container-fluid no-padding blog-list">
			<!-- container -->
			<div class="container">
				<div class="row">
					<!-- Content Area -->
					<div class="content-area col-md-8 col-sm-7">
						<div class="row">
                              @foreach($items as $a)
							<div class="col-md-4 col-12">
								<article class="type-post">
									<div class="entry-cover">
										<a href="/home/meal/{{$a->id}}"><img src="/storage/images/{{$a->image}}" width="580" height="436" alt="News" /></a>
									</div>
									<div class="entry-content">
										<h3 class="entry-title">
                                            <a href="/home/meal/{{$a->id}}" title="">{{$a->title}}</a></h3>
										<div class="post-date">{{$a->created_at}}</div> 
										<div class="entry-meta">
											<div class="byline">بواسطة الشيف : <a href="/home/restaurant/{{$a->restaurant_id}}" title="">{{$a->restaurant->title}}</a></div>
											
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
                        
                        
						<nav class="ow-pagination">
                          {{$items->links()}}
						</nav>
					</div>
                    <!-- Content Area /- -->
					<!-- Widget Area -->
					<div class="col-md-4 col-sm-5 widget-area">
						
                        <!-- Widget Search -->
                        <form class="row">
                            <aside class="widget widget_search">
                                <h3 class="widget-title">ابحث هنا</h3>
                                <div class="input-group">
                                    <input autofocus type="text" placeholder="ابحث عن أشهى المأكولات من هنا" name="q" value="{{$q}}" class="form-control">
                                    <span class="input-group-btn">
                                        <button type="submit" class="btn btn-default">
                                            <i class="icon icon-Search"></i></button>
                                    </span>
                                </div>
                            </aside><!-- widget Search /- -->
                        
                       </form>

                        
						<!-- Widget Categories -->
						<aside class="widget widget_categories">
							<h3 class="widget-title">التصنيفات</h3>
							<ul>
                                 @foreach($categories as $c)
								<li ><a href="/home/restaurants?category_id={{$c->id}}" title="">{{$c->name}}</a>
                                 @endforeach
							</ul>
						</aside>
                        <!-- Widget Categories -->

						<!-- Widget Posts -->
						<aside class="widget widget_posts">
							<h3 class="widget-title">آخر  المأكولات</h3>	
                            @foreach($last_items as $a)
							<div  class="latest-content">
                                <div class="meals">
								<a title="Post Cover" href="/meal/{{$a->id}}">
                                    <img alt="latest-post-1" width="79" height="79" src="/storage/images/{{$a->image}}"></a>
                                </div>
								<h3><a title="" href="/home/meal/{{$a->id}}">{{$a->title}}</a></h3>
								<span>
                                   {{$a->category->name}}
								</span>
                                <span>
                                    <a href="/home/restaurant/{{$a->restaurant_id}}" title="">{{$a->restaurant->title}}</a>					
                                </span>
							</div>
                            @endforeach
						</aside>
                        <!-- Widget Posts -->
                        
						<!-- Widget Posts -->
					</div>
                    <!-- Widget Area /- -->
				</div>

				<div class="row top-cheifs">
							<div class="col-12">
								<h3 class="widget-title">أشهر الطباخين</h3>
							</div>
							<div class="row">
                                @foreach($chefs as $a)
								<div class="col-md-3 col-12">
										<div class="cheif-box">
											<img src="/storage/images/{{$a->image}}">
											<h4>{{$a->title}}</h4>
											<p>
                                                {{$a->category->name}}
                                            </p>
											<a href="/home/restaurant/{{$a->id}}">مشاهدة المزيد</a>
										</div>
								</div>
								
								@endforeach
								
							</div>
						</div>
			</div><!-- container /- -->
			<div class="section-padding"></div>
		</div><!-- Latest News Section /- -->


















@endsection