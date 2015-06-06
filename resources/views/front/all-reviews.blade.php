@extends('front.template')
@section('metas')
@foreach($reviewLists as $e)
	<?php $keyword =  $e->meta_keyword;
		$description = $e->meta_description;
	?>
@endforeach
<meta property="og:site_name" content="shantidhaka.com"/>
<meta property="og:title" content='{{ $keyword }}'/>
<meta property="og:description" content="{{ $description }}"/>
<!-- {{ trans('front/site.title') }} -->
@endsection
	@section('home')
		<div class="col-md-9">
			@include('front.search')
			<div class="row" style="margin-top:25px;">
				<div class="col-md-8">
					<div class="row">
						<div class="col-md-12">
							@include('front.all-review-lists')
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							@include('front.blog-posts')
						</div>
					</div>
					<div class="row">
						@include('front.mostread-editor-choice')
					</div>
				</div>

				<div class="col-md-4">
					@include('front.review-search')
				</div>
			</div>

			<div class="row" style="margin-top:25px;">
				<div class="col-md-12">
					@include('front.listings')
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
@stop
