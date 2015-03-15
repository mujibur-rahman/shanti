@foreach($articles as $article)
<div class="article-style-1">
	<div class="picbox">
		<img src="/images/articles/{{ $article->media }}" class="img-responsive">
		<div class="as1-tag tag-1">{!! $article->article_category->title !!}</div>
	</div>
	<a href="/details/{{ $article->id }}" title="{!! $article->title !!}"><h1>{!! $article->title !!}</h1></a>
	{!! $article->short_detail !!}
	<div class="clearfix"></div>
</div>
@endforeach
<!--button type="button" class="btn btn-block">View more</button-->
<a href="#" class="btn btn-block">View more</a>