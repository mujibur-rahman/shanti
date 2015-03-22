<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="../../assets/ico/favicon.ico">
@yield('metas')
@yield('head')
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/finestgraphic.css') }}" rel="stylesheet">
<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body style="padding-bottom:25px;">
	<div class="container">
		
		<div class="row">
			<div class="col-md-12">
				<div class="header">
					<img src="/img/header-banner-bg.png">
						<div class="logo">ShantiDhaka.com</div>
						<div class="language">
							<div class="btn-group" role="group" aria-label="...">
							  <button type="button" class="btn btn-style-1">Select Language</button>

							  <div class="btn-group" role="group">
							    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">English
							    	<span class="caret"></span>
							    </button>
							    <ul class="dropdown-menu" role="menu">
							      <li><a href="#">English</a></li>
							      <li><a href="#">Bangla</a></li>
							    </ul>
							  </div>
							</div>
						</div>
					<div class="clearboth"></div>
				</div>
			</div>
		</div>
		<!--Menubar-->
		<div class="row">
			<div class="col-md-12"><div class="top-menu">
				<nav class="navbar" role="navigation">
					<div class="navbar-inner">
						<!-- Menu -->
						<ul class="nav navbar-nav l_tinynav1" id="nav">
						<li><a href="/" title="">HOME &nbsp;</a></li>
						<li><a href="/category/article/1" title="">RESTAURANT & BAR</a></li>      
						<li><a href="/category/article/3" title="">CLUB & CONCERT</a></li>           
						<li><a href="portfolio.html" title="">SCENE & CULTURE</a></li> 
						<li><a href="project.html" title="">SHOPPING</a></li>    
						<li><a href="components.html" title="">CITY LIFE</a></li>
						<li><a href="contact.html" title="">BLOGS</a></li> 
						<li><a href="contact.html" title="">GUIDES</a></li> 
						<li><a href="contact.html" title=""> &nbsp; MORE <span class="caret"></span></a>
							<!-- Submenu -->
							<ul>
							<li><a href="components.html" title="">Submenu Item 1</a></li>
							<li><a href="components.html" title="">Submenu Item 2</a></li>
							<li><a href="components.html" title="">Submenu Item 3</a></li>
							</ul>
							<!-- Submenu End -->  
						</li> 
						</ul>
						<select id="tinynav1" class="tinynav tinynav1">
							<option value="index.html" selected="selected">Home</option>
							<option value="services.html">Services</option>
							<option value="about.html">About</option><option value="portfolio.html">Portfolio</option>
							<option value="project.html">Project</option>
							<option value="components.html">Components</option>
							<option value="components.html">- Submenu Item 1</option>
							<option value="components.html">- Submenu Item 2</option>
							<option value="index.html">- Submenu Item 3</option>
							<option value="contact.html">Contact</option>
						</select>
						<!-- Menu End --> 
						</div>  
					</nav>
				</div>
			</div>
		</div>
		<!--menubar finish-->
		<!--Submenu -->
		<div class="row">
			<div class="col-md-12">
				<div class="sub-menu">
					<nav class="navbar-2" role="navigation">
						<div class="navbar-inner">
							<!-- Menu -->
							<ul class="nav navbar-nav " id="nav">
							<li><a href="index.html" title="">LISTS</a></li>
							<li><a href="services.html" title="">MUSEUMS</a></li>      
							<li><a href="about.html" title="">LUNCH</a></li>           
							<li><a href="portfolio.html" title="">ACTIVITIES</a></li> 
							<li><a href="project.html" title="">BRUNCH</a></li>    
							<li><a href="components.html" title="">WEEKEND</a></li>
							<li><a href="contact.html" title="">CHILD</a></li> 
							<li><a href="contact.html" title="" class="last">KICKOFF & CONFERENCE</a></li> 
							</ul>
							<!-- Menu End --> 
						</div>  
					</nav>
				</div>
			</div>
		</div>
		<!-- Finish sub menu -->
	</div><!--menu container-->

	<div class="clearfix"></div>

	<!-- body container start -->
	<div class="container" style="margin-top:25px;">
		<div class="row">
			<!-- START: left container -->
			@yield('home')
			<!-- END: left container -->
			@yield('details')
			<!-- START: ad container -->
			@yield('ads')
			<!-- END: ad container -->
		</div>
	</div>
	<!-- body container finish-->

	@yield('slider')
	<!--Footer-->
	@include('front.footer')
	<!--Footer finish-->

</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap-dropdown.js') }}"></script>
@yield('scripts')

</body>
</html>