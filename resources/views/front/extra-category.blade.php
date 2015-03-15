<div class="col-md-12">
	
	@foreach($moreTagArticles as $more)
		<div class="col-md-6">
			<div class="row">
				<div class="col-md-5"><img src="/images/articles/{{$more->media}}" class="img-responsive"></div>
				<div class="col-md-7">
					<div class="article-style-4">
					<h2>{{$more->title}}</h2>
					<p><b>{{$more->article_category->title}}</b> &nbsp; {{ strip_tags($more->short_detail) }}
						<a href="/articles/{{ $more->id }}">More..</a></p>
					</div>
				</div>
			</div>
		</div>
	@endforeach
</div>
