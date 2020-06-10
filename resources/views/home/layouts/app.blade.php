<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class=""><!--<![endif]-->
<head>
	<meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

	<title>نظام ادارة المحتوى</title>

	<!-- Standard Favicon -->
	<link rel="icon" type="image/x-icon" href="/images/favicon.png" />
	
	<!-- For iPhone 4 Retina display: -->
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="/images//apple-touch-icon-114x114-precomposed.png">
	
	<!-- For iPad: -->
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="/images//apple-touch-icon-72x72-precomposed.png">
	
	<!-- For iPhone: -->
	<link rel="apple-touch-icon-precomposed" href="/images//apple-touch-icon-57x57-precomposed.png">	
	
	<!-- Library - Google Font Familys -->	
	
	<!-- Library - Bootstrap v3.3.5 -->
    <link rel="stylesheet" type="text/css" href="/libraries/lib.css">
	
	<!-- Custom - Common CSS -->
    
	<link rel="stylesheet" type="text/css" href="/css/plugins.css">
    	<link rel="stylesheet" type="text/css" href="{{/css/plugins.css}}">

	<link rel="stylesheet" type="text/css" href="{{/css/navigation-menu.css}}">
	
	<!-- Custom - Theme CSS -->
	<link rel="stylesheet" type="text/css" href="/style.css">
	<link rel="stylesheet" type="text/css" href="/css/shortcodes.css">
		
	<!--[if lt IE 9]>
		<script src="js/html5/respond.min.js"></script>
    <![endif]-->
     


</head>

<body data-offset="200" data-spy="scroll" data-target=".ow-navigation">
	<!-- Loader -->
	<div id="site-loader" class="load-complete">
		<div class="loader">
			<div class="loader-inner ball-clip-rotate">
				<div></div>
			</div>
		</div>
	</div><!-- Loader /- -->

	<a id="top"></a>
	
	<!-- Header Section -->
	<header id="header" class="header-section container-fluid no-padding">
		<!-- SidePanel -->
		<div id="slidepanel">
			<!-- Top Header  
			<div class="top-header container-fluid no-padding">
				<div class="container">
					<div class="row">
						<div class="col-md-7 col-sm-12">
							<p>Welcome to best renovation company in themeforest</p>
						</div>
						<div class="col-md-5 col-sm-12">
							<a href="mailto:info@ourdomain.com" title="Info@ourdomain.com"><i class="fa fa-envelope"></i> Info@ourdomain.com</a>
							<a href="tel:+011234567896" title="+011234567896"><i class="fa fa-phone"></i> (+01) 123 456 7896</a>
						</div>
					</div>
				</div>
			</div>  <!-- Top Header /- -->
			<!-- Middel Header /- -->
			<div class="middle-header container-fluid no-padding">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<a href="/home" title="Alcazar"><img src="/storage/images/logo.png" alt="Logo" /></a>
						</div>
						<div class="col-md-8 col-sm-12 header-content">
						</div>
					</div>
				</div>
			</div>
		</div><!-- SidePanel /- -->
		<!-- Container -->
		<div class="container">
			<!-- nav -->
			<nav class="navbar navbar-default ow-navigation">
				
				
				<div class="navbar-collapse collapse" id="navbar">
					<ul class="nav navbar-nav">
						<li class="dropdown active">
							<a href="/home"  class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">الرئيسية </a>							
						</li>
						<li><a href="/home/restaurants" >المأكولات </a></li>
						<li><a href="" >أعمال يدوية </a></li>
                        <li><a href="" >التصوير </a></li>
						<li><a href="/home/about" >من نحن </a></li>
                        
                        <!-- Authentication Links -->
                         @guest
                            <li class="nav-item" >
                                <a class="nav-link" href="{{ route('login') }}">دخول</a>
                            </li>
                            <li  class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">تسجيل</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        تسجيل خروج
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest    
					</ul>
                    

                    <ul class="nav navbar-nav" >
                        
                    </ul>
                    
                    
				</div><!--/.nav-collapse -->
			</nav><!-- nav /- -->
		</div><!-- Container /- -->
	</header><!-- Header Section /- -->
	
	<main class="site-main page-spacing" >
	            @yield('content')

		
	</main>
	
	<!-- Footer Section -->
	<div class="footer-section container-fluid no-padding">
		<!-- Container -->
		<div class="container">
			
			<div class="row">
				<div class="col-md-3 col-sm-6 col-xs-6">
					<aside class="ftr-widget widget_contact">
						<h3 class="widget-title">اتصل بنا </h3>
						
						<div class="info-box">
							<h5>ارسل لنا عبر البريد الإلكتروني </h5>
							<a href="mailto:info@ourdomain.com" title="Info@Ourdomain.Com">Info@Ourdomain.Com</a>
							<a href="mailto:support@ourdomain.com" title="Support@Ourdomain.Com">Support@Ourdomain.Com</a>
						</div>
						<div class="info-box">
							<h5>اتصل بنا </h5>
							<a href="tel:+101234567896" title="+(10) 123 456 7896">+(10) 123 456 7896</a>
							<a href="tel:+101234567899" title="+(10) 123 456 7899">+(10) 123 456 7899</a>
						</div>
					</aside>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6">
					<aside class="ftr-widget widget_opening">
						<h3 class="widget-title">العنوان </h3>
						<p><span>الجامعة الاسلامية , فلسطين </span>, غزة</p>
						
					</aside>
					
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6">
					<aside class="ftr-widget widget_opening">
						<h3 class="widget-title">ساعات العمل </h3>
						<p><span>على مدار الساعة </span>: 12am to 12pm</p>
						
					</aside>
					
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6">
					<aside class="ftr-widget widget_gallery">
						<h3 class="widget-title">معرض الصور </h3>
						<div class="ftr-gallery">
							<a href="#"><img src="/storage/images/oaS6sRcctLSSDlcXDP1O6ZCFhLjyvta3Pa5HOuYW.png" width="83" height="83" alt="Gallery" /></a>
							<a href="#"><img src="/storage/images/cFGLC1GyB3Q6BQmBowsLiatFef7VFR2IAfpT0baf.png" width="83" height="83" alt="Gallery" /></a>
							<a href="#"><img src="/storage/images/IrLe40fkaA7Vhq5eeG7xj4twOJr8eucV0IaLbCAB.png" width="83" height="83" alt="Gallery" /></a>
							<a href="#"><img src="/storage/images/4AtzDmMg42gdMnQWWbztHb91QgPqAqWZppDOM9Qm.png" width="83" height="83" alt="Gallery" /></a>
							<a href="#"><img src="/storage/images/7vky3QUzmh24N2ZqhoG5SNy7vS6BIkYspKiz98lU.png" width="83" height="83" alt="Gallery" /></a>
							<a href="#"><img src="/storage/images/MCa92ECOSAPqI02ACRm4JxTuN52Yyi5RyzPQ21aC.png" width="83" height="83" alt="Gallery" /></a>
						</div>
					</aside>					
				</div>
			</div>
		</div>
        
        <!-- Container /- -->
		<div class="footer-bottom container-fluid no-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-2 col-sm-12 col-xs-12">
						<p> {{date("Y")}} &copy; [جميع الحقوق محفوظة]</p>
					</div>
					<div class="col-md-10 col-sm-12 col-xs-12">
						<!-- nav -->
						<nav class="navbar navbar-default ow-navigation">
							<div class="navbar-header">
								<button aria-controls="navbar" aria-expanded="false" data-target="#ftr-navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>
							<div class="navbar-collapse collapse navbar-right" id="ftr-navbar">
								<ul class="nav navbar-nav">
									<li><a href="/home" >ألرئيسية</a></li>
									<li><a href="/home/restaurants" >المأكولات</a></li>
									<li><a href="#" > التصوير</a></li>
									<li><a href="#" >الأعمال اليدوية</a></li>
									
								</ul>
							</div><!--/.nav-collapse -->
						</nav><!-- nav /- -->
					</div>
				</div>
			</div>
		</div>
	</div><!-- Footer Section /- -->
	
	<!-- JQuery v1.11.3 -->
	<script src="/js/jquery.min.js"></script>
	
	<!-- Library JS -->
	<script src="/libraries/lib.js"></script>
	
	<!-- Library - Theme JS -->	
	<script src="/js/functions.js"></script>
    @yield('js')
</body>
</html>
