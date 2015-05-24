<div class="row">
	<div class="col-md-12">
		<div class="more-info-container">
			<h1>More information</h1>
			@foreach($reviewLists as $key => $review)
				@if( $key % 2 == 1)
				<div class="more-info-box">
					<div class="more-info-iconbox"><a href="/details/article/{{$review->id}}">
						<i class="fa fa-chevron-right fa-3x"></i></a>
					</div>
					<p>
						<b><span class="label label-style-1">{{ (session('locale') == "en" ? $review->article_category->title  : $review->article_category->bnTitle ) }} </span>
							{{ (session('locale') == "en" ? $review->title  : $review->bnTitle ) }}</b><br>
							{{ (session('locale') == "en" ? strip_tags($review->details) : strip_tags($review->bnDetails) ) }}
						<div>
							<a href=""><i class="fa fa-plus fa-lg color-yellow"></i></a>
							<a href=""><i class="fa fa-plus fa-lg color-yellow"></i></a>
							<a href=""><i class="fa fa-plus fa-lg color-yellow"></i></a>
							<a href=""><i class="fa fa-plus fa-lg color-yellow"></i></a>
							<a href=""><i class="fa fa-plus fa-lg color-yellow"></i></a>
						</div>
					</p>
				</div>
				@else
				<div class="more-info-box more-info-box-2">
					<div class="more-info-iconbox"><a href="/details/article/{{$review->id}}">
						<i class="fa fa-chevron-right fa-3x"></i></a>
					</div
					<p>				
						<b><span class="label label-style-1">{{ (session('locale') == "en" ? $review->article_category->title  : $review->article_category->bnTitle ) }}</span> 
							{{ (session('locale') == "en" ? $review->title  : $review->bnTitle ) }}</b><br>
							{{ (session('locale') == "en" ? strip_tags($review->details) : strip_tags($review->bnDetails) ) }}
						<div>
							<a href=""><i class="fa fa-plus fa-lg color-yellow"></i></a>
							<a href=""><i class="fa fa-plus fa-lg color-yellow"></i></a>
							<a href=""><i class="fa fa-plus fa-lg color-yellow"></i></a>
							<a href=""><i class="fa fa-plus fa-lg color-yellow"></i></a>
							<a href=""><i class="fa fa-plus fa-lg color-yellow"></i></a>
						</div>
					</p>
				</div>
				@endif
			@endforeach
			@if(count($reviewLists) <= 0)
			No data found on this category
			@endif
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12 text-center">
		<nav>
			<!--Pagination-->
			{!! $reviewLists !!}
		</nav>
	</div>
</div>
