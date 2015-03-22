<div class="blog-post">
	<h1>Listings</h1>
	<div class="pic-area">
		@foreach($listArticles as $list)
			<div class="pic-box">
				<a href="/details/article/{{ $list->id }}"><img src="/images/articles/{{ $list->media }}"></a><br>
				<a href="/details/article/{{ $list->id }}"><p>{{ $list->title }}</p></a>
				<div class="clearfix"></div>
			</div>
		@endforeach
		<div class="clearfix"></div>
	</div>
</div>