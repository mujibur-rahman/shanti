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
<link href="{{ asset('css/style.css')}}" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="{{ asset('js/jquery.flexisel.js')}}"></script>
<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<style>
.language {
    color: #fff;
    float: right;
    font-size: 18px;
    font-weight: normal;
    height: auto;
    line-height: 33px;
    padding: 0;
    position: absolute;
    right: 20px;
    top: 45px;
    width: auto;
}
.btn-group, .btn-group-vertical {
    display: inline-block;
    position: relative;
    vertical-align: middle;
}
.btn-group > .btn:first-child:not(:last-child):not(.dropdown-toggle) {
    border-bottom-right-radius: 0;
    border-top-right-radius: 0;
}
.btn-group > .btn:first-child {
    margin-left: 0;
}
.btn-group > .btn, .btn-group-vertical > .btn {
    float: left;
    position: relative;
}
.btn-style-1 {
    background: none repeat scroll 0 0 #81317b;
    color: #fff;
}
.btn-style-1 {
    background: none repeat scroll 0 0 #81317b;
    color: #fff;
}
</style>

</head>
<body style="padding-bottom:25px;">
	<div class="container">
		
		<div class="row">
			<div class="col-md-12">
				<div class="header">
					<img src="/img/header-banner-bg.png">
						<div class="logo">ShantiDhaka.com</div>
						<!-- class="language"><ul>
							<li class="imgflag" style="list-style: none;">
							<a href="{!! url('language') !!}"><img width="32" height="32" alt="en" src="{!! asset('/img/' . (session('locale') == 'bg' ? 'bengali' : 'english') . '-flag.png') !!}"></a>

							</li>
							</ul>
						</div-->
						<div class="language">
							<div aria-label="..." role="group" class="btn-group">
							<button class="btn btn-style-1" type="button">Select Language</button>
							<div role="group" class="btn-group">
								<select style="border-radius: 0 5px 5px 0;" class="form-control"  id="ChangeLang">
									@if(session('locale') == 'bg')
									<option selected value="bg">Bangla</option>
									@else
									<option value="bg">Bangla</option>
									@endif
									@if(session('locale') == 'en')
									<option value="en" selected>English</option>
									@else
									<option value="en">English</option>
									@endif
								</select>
							  </div>
							</div>
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
	<div class="container">
		@include('front.footerads')
	</div>
	<!--Footer-->
	@include('front.footer')
	<!--Footer finish-->

<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap-dropdown.js') }}"></script>
@yield('scripts')
<script type="text/javascript">
	jQuery('#ChangeLang').change(function(event) {
		/* Act on the event */
		jQuery(this).val();
		window.location.href = "{!! url('language') !!}";
	});
</script>
</body>
</html>
