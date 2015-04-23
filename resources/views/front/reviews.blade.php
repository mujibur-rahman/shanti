<div class="article-style-2">
	<h1>LATEST REVIEWS</h1>
	@foreach($reviewArticles as $review)
		<div class="picbox">
			<a href="/details/article/{{ $review->id }}"><img src="/images/articles/{{ $review->media}}" class="img-responsive" /></a>
		</div>
		<i class="fa fa-plus fa-lg color-yellow m-t-10"></i> <i class="fa fa-plus fa-lg color-yellow"></i> <i class="fa fa-plus fa-lg color-yellow"></i>
		<a href="/details/article/{{ $review->id }}"><h2>{{ $review->title }}</h2></a>
		<p>{{ strip_tags($review->short_detail) }}</p>
		<div class="clearfix"></div>
	@endforeach
</div>
<a href="/list/reviews" style="text-decoration: none;" target="_top">
	<button type="button" class="btn btn-style-1 btn-block">ALL REVIEWS</button>
</a>
