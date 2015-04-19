<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="../../assets/ico/favicon.ico">
@yield('metas')
@yield('head')
<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
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
							
								<ul class="nav nav-pills">
									<li style="padding-right:10px;">Select Language</li>
									<li>
										<select class="form-control">
										  <option>Bangla</option>
										  <option>English</option>
										</select>
									</li>
								</ul>
							
						</div>
					<div class="clearboth"></div>
				</div>
			</div>
		</div>
		@include('front.menu')
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

<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap-dropdown.js') }}"></script>
@yield('scripts')

</body>
</html>