@extends('home.layouts.app')
@section('content')



		<!-- Slider Section 

        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="..." class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="..." class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="..." class="d-block w-100" alt="...">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
            
    </div> -->



<div id="slider-section" class="slider-section slider-section2 container-fluid no-padding">
			<div id="photo_slider" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
					<li data-target="#photo_slider" data-slide-to="0" class="active"></li>
					<li data-target="#photo_slider" data-slide-to="1"></li>
					<li data-target="#photo_slider" data-slide-to="2"></li>
				</ol>
				<!-- Wrapper for slides -->
                <?php $i=0; ?>
               @foreach($sliders as $s)
     
				<div class="carousel-inner" role="listbox">
					<div class="item {{$i++==0?'active':''}}">
						<img src="/storage/images/111.jpg"  width="1920" height="800" alt="Slide">
						<div class="carousel-caption">
							<div class="container">
								<div class="col-md-10 col-sm-10 col-xs-10">
									 <h2>العرض الأضخم في قسم المأكولات </h2>
									<p>{{$s->summary}}</p>
                                    <p><a  href="{{$s->url}}" target="_blank"> للانتقال الي العرض اضغط هنا ^_*</a></p>
								</div>
							</div>
						</div>
					</div>
                    <div class="item {{$i++==0?'active':''}}">
						<img src="/storage/images/new_photo.jpg"  width="1920" height="800" alt="Slide">
						<div class="carousel-caption">
							<div class="container">
								<div class="col-md-10 col-sm-10 col-xs-10">
									<h2>العرض الأضخم في قسم التصوير </h2>
									<p>{{$s->summary}}</p>
                                    <p><a  href="{{$s->url}}" target="_blank"> للانتقال الي العرض اضغط هنا ^_*</a></p>
								</div>
							</div>
						</div>
					</div>
                    <div class="item {{$i++==0?'active':''}}">
						<img src="/storage/images/2.jpg"  width="1920" height="800" alt="Slide">
						<div class="carousel-caption">
							<div class="container">
								<div class="col-md-10 col-sm-10 col-xs-10">
									<h2>العرض الأضخم في قسم الأعمال اليدوية  </h2>
									<p>{{$s->summary}}</p>
                                    <p><a  href="{{$s->url}}" target="_blank"> للانتقال الي العرض اضغط هنا ^_*</a></p>
								</div>
							</div>
						</div>
					</div>
			       @endforeach

                    
                    
                    
                    
				</div>
                <!-- Wrapper for slides /- --> 
				<!-- Controls -->
				<a class="left carousel-control" href="#photo_slider" role="button" data-slide="prev">
					<span class="fa fa-angle-left" aria-hidden="true"></span>
				</a>
				<a class="right carousel-control" href="#photo_slider" role="button" data-slide="next">
					<span class="fa fa-angle-right" aria-hidden="true"></span>
				</a>
			</div>		
		</div>

		<!-- Slider Section /- -->
		<div class="section-padding"></div>

		<!-- Welcome Section -->
		<div class="welcome-section welcome-section2 container-fluid no-padding">
			<!-- Container -->
			<div class="container">
				<!-- Section Header -->
				<div class="section-header">
					<h3>أهلا وسهلا بالزوار الكرام </h3>
					<p>الخدمات التي يقدمها موقعنا </p>
				</div><!-- Section Header /- -->
				<div class="row">
					<div class="col-md-4 col-sm-6 col-xs-6 no-padding">
						<div class="welcome-box">
							<img src="/storage/images/food2.jpg" width="390" height="428" alt="Welcome" />
							<div class="welcome-hover">
								<h3>خدمة المأكولات </h3>
								<p>كخدمة تشمل أفضل الشيفات في غزة </p>
								<a href="/home/restaurants" title="know more">معرفة المزيد </a>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-6 no-padding">
						<div class="welcome-box">
							<img src="/storage/images/Webp.net-resizeimage.jpg" width="390" height="428" alt="Welcome" />
							<div class="welcome-hover">
								<h3>خدمة التصوير </h3>
								<p>خدمة تشمل أفضل المصورين الماهرين في غزة </p>
								<a href="#" title="know more">معرفة المزيد </a>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-6 no-padding">
						<div class="welcome-box">
							<img src="/storage/images/hand2.jpg" width="390" height="428" alt="Welcome" />
							<div class="welcome-hover">
								<h3>خدمة الأعمال اليدوية </h3>
								<p>خدم تشمل افضل الحرفيين وأمهرهم في غزة </p>
								<a href="#" title="know more">معرفة المزيد </a>
							</div>
						</div>
					</div>
				</div>
			</div><!-- Container /- -->
		</div><!-- Welcome Section /- -->
		<div class="section-padding"></div>
		
	
		
		<!-- Counter Section -->
		<div class="counter-section container-fluid no-padding">
			<!-- Container -->
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-6 col-xs-12">
						
					</div>
					<div class="col-md-10 col-sm-6 col-xs-12 counter-detail">
						<h4>نحن  <span>من ذوي الخبرة </span>في التجديد </h4>
						<p>إجعل من موهبتك مصدر للزرق و اعرضها من خلال موقعنا لتصل لأكبر عدد ممكن من الأشخاص </p>				
						<!-- col-md-4 -->
						<div class="col-md-4 col-sm-4 col-xs-4 animated fadeInDown">
							<div class="statistics-box">
								<i class="icon icon-Heart"></i>
								<h2 data-statistics_percent="1550" id="statistics_count-1">630</h2>
								<h6>المستخدمين السعداء </h6>
							</div>
						</div><!-- col-md-4 /- -->
						<!-- col-md-4 -->
						<div class="col-md-4 col-sm-4 col-xs-4 animated fadeInDown">
							<div class="statistics-box">
								<i class="icon icon-Briefcase"></i>
								<h2 data-statistics_percent="3125" id="statistics_count-2">800</h2>
								<h6>الزائرين </h6>
							</div>
						</div><!-- col-md-4 /- -->
						<!-- col-md-4 -->
						<div class="col-md-4 col-sm-4 col-xs-4 animated fadeInDown">
							<div class="statistics-box">
								<i class="icon icon-WorldWide"></i>
								<h2 data-statistics_percent="073" id="statistics_count-3">95</h2>
								<h6>التعليقات </h6>
							</div>
						</div><!-- col-md-4 /- -->
					</div>
				</div>
			</div>
            <!-- Container /- -->
			<div class="section-padding"></div>
		</div><!-- counter Section /- -->
		<br>
		<!-- Team Section -->
		<div class="team-section container-fluid no-padding">
			<!-- container -->
			<div class="container">
				<!-- Section Header -->
				<div class="section-header">
					<h3>فريق العمل  </h3>
					<p>مستعدون لخدمتكم دائما </p>
				</div><!-- Section Header /- -->
				<div class="row">
					
					<div class="col-md-4 col-sm-6 col-xs-6">	
						<div class="team-box">
							<div class="team-img">
								<img src="images/home-2-team2.jpg" width="250" height="340" alt="Team" />
								<ul>
									<li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#" title="Twiiter"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#" title="Googleplus"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
								</ul>
							</div>
							<h3> رغد مهاني </h3>
							<p>مهندسة حاسوب </p>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-6">	
						<div class="team-box">
							<div class="team-img">
								<img src="images/home-2-team3.jpg" width="250" height="340" alt="Team" />
								<ul>
									<li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#" title="Twiiter"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#" title="Googleplus"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
								</ul>
							</div>
							<h3>نور أبو حصيرة </h3>
							<p>مهندسة حاسوب </p>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-6">	
						<div class="team-box">
							<div class="team-img">
								<img src="images/home-2-team4.jpg" width="250" height="340" alt="Team" />
								<ul>
									<li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#" title="Twiiter"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#" title="Googleplus"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
								</ul>
							</div>
							<h3>لميس روك </h3>
							<p>مهندسة حاسوب </p>
						</div>
					</div>
				</div>
			</div><!-- container /- -->
		</div><!-- Team Section /- -->
		<div class="section-padding"></div>
		
		<!-- Client Section -->
		<div class="client-section container-fluid no-padding">
			<!-- Container -->
			<div class="container">
				<div class="client-carousel">
					<a href="#" title="Logo"><img src="images/client1.png" width="86" height="74" alt="Client" /></a>
					<a href="#" title="Logo"><img src="images/client2.png" width="112" height="63" alt="Client" /></a>
					<a href="#" title="Logo"><img src="images/client3.png" width="98" height="80" alt="Client" /></a>
					<a href="#" title="Logo"><img src="images/client4.png" width="107" height="76" alt="Client" /></a>
					<a href="#" title="Logo"><img src="images/client5.png" width="120" height="67" alt="Client" /></a>
					<a href="#" title="Logo"><img src="images/client6.png" width="90" height="82" alt="Client" /></a>
				</div>
			</div><!-- Container /- -->
		</div><!-- Client Section /- -->

@endsection