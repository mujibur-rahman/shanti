@extends('front.template')
@section('metas')
<meta name="description" content="Dhaka shanti dhaka">
<meta name="author" content="">
<title>Shanti Dhaka - index</title>
<!-- {{ trans('front/site.title') }} -->
@endsection
	@section('home')
		<div class="col-md-9">
			@include('front.search')
			<div class="row" style="margin-top:25px;">
				<div class="col-md-8">
					<div class="row">
						<div class="col-md-8">
							@include('front.category-list')
						</div>
						<div class="col-md-4">
							@include('front.reviews')
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							@include('front.blog-posts')
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="most-editor">
								<h1>MOST READ</h1>
									<ol class="me-ol">
										<li>Lorem ipsum dolor sit amet</li>
										<li>Consectetur adipiscing elit</li>
										<li>Integer molestie lorem at massa</li>
										<li>Facilisis in pretium nisl aliquet</li>
										<li>Nulla volutpat aliquam velit</li>
									</ol>
							</div>
						</div>
						<div class="col-md-6">
							<div class="most-editor">
								<h1>EDITOR’S CHOISE</h1>
								<ol class="me-ol">
									<li>Lorem ipsum dolor sit amet</li>
									<li>Consectetur adipiscing elit</li>
									<li>Integer molestie lorem at massa</li>
									<li>Facilisis in pretium nisl aliquet</li>
									<li>Nulla volutpat aliquam velit</li>
								</ol>
							</div>
						</div>

					</div>
				</div>

				<div class="col-md-4">
					@include('front.feature-deal')
				</div>
			</div>

			<div class="row" style="margin-top:25px;">
				<div class="col-md-12">
					<!-- <div class="blog-post">
						<h1>BLOG POSTS</h1>
						<div class="pic-area">
							<div class="pic-box">
								<img src="img/blog-post-pic-1.png"><br>
								<p>MUSEUM LIST</p>
								<div class="clearfix"></div>
							</div>
							<div class="pic-box">
								<img src="img/blog-post-pic-2.png"><br>
								<p>MUSEUM LIST</p>
								<div class="clearfix"></div>
							</div>
							<div class="pic-box">
								<img src="img/blog-post-pic-3.png"><br>
								<p>MUSEUM LIST</p>
								<div class="clearfix"></div>
							</div>
							<div class="clearfix"></div>
						</div>
					</div> -->
					@include('front.blog-posts')
				</div>
			</div>
			<div class="row">
				<div class="col-md-12"><h1 class="article-4">MORE FROM ALL OF DHAKA</h1></div>
			</div>
			<div class="row" style="margin-top:0px;">
				<div class="clearfix"></div>
					@include('front.extra-category')
			</div>
		</div>

		@section('ads')
			<div class="col-md-3">
				@include('front.ads')
			</div>
		@endsection
	@endsection

	<!--Slider-->
	@section('slider')
	<div class="container">
		<div class="row">
			<div class="col-md-4"><div class="footer-add-container">
				<img src="img/footer-add-pic-1.png"></div>
			</div>
			<div class="col-md-4"><div class="footer-add-container">
				<img src="img/footer-add-pic-2.png"></div>
			</div>
			<div class="col-md-4"><div class="footer-add-container">
				<img src="img/footer-add-pic-3.png"></div>
			</div>
		</div>
	</div>
	@endsection
	<!--Slider finish-->
@stop