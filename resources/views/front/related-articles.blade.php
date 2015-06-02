<div class="col-md-12"><div class="article-style"><h1>RELATED</h1></div></div>
@foreach($articleRelated as $ar)
<div class="col-md-6">
	<div class="article-style-2">
		<div class="picbox"><img src="/images/articles/{{ $ar->media }}" class="img-responsive"></div>
		<a href="/details/article/{{ $ar->id }}"><h2>{{ $ar->title }}</h2></a>
		<p>{{ strip_tags($ar->short_detail) }}</p>
		<!--div>Tags:{{ $ar->title }}</div-->
		<div class="clearfix"></div>
	</div>
</div>
@endforeach
@if(count($articleRelated) <= 0)
<div class="col-md-6">
	<div class="article-style-2">
	No related post found
	</div>
</div>
@endif
