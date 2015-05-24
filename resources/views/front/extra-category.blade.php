<div class="col-md-12">
	@if( count($moreTagArticles) <= 0 )
		No articles found for this category
	@endif
	@foreach($moreTagArticles as $more)
		<div class="col-md-6">
			<div class="row">
				<div class="col-md">
					<div class="article-style-4">
					<h2>{{ (session('locale') == "en" ? $more->title : $more->bnTitle ) }}</h2>
					<p><img src="/images/articles/{{$more->media}}" style="float: left; padding-right: 10px; padding-bottom: 10px; width: 200px; height: 150px;" class="img-responsive"><b>{{ (session('locale') == "en" ? $more->article_category->title : $more->article_category->bnTitle ) }}
						</b> &nbsp;{{ (session('locale') == "en" ? strip_tags($more->short_detail) : strip_tags($more->bnShort_detail) ) }}
						<a href="/details/article/{{ $more->id }}">More..</a></p>
					</div>
				</div>
			</div>
		</div>
	@endforeach
</div>
