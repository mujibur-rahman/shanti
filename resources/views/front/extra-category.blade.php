<div class="col-md-12">
	@if( count($moreTagArticles) <= 0 )
		No articles found for this category
	@endif
	@foreach($moreTagArticles as $more)
		<div class="col-md-6">
			<div class="row">
				<div class="col-md-5"><img src="/images/articles/{{$more->media}}" class="img-responsive"></div>
				<div class="col-md-7">
					<div class="article-style-4">
					<h2>{{$more->title}}</h2>
					<p><b>{{$more->article_category->title}}</b> &nbsp; {{ strip_tags($more->short_detail) }}
						<a href="/details/article/{{ $more->id }}">More..</a></p>
					</div>
				</div>
			</div>
		</div>
	@endforeach
</div>
