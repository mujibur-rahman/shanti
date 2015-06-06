<h1 class="article-3">FEATURED DEALS</h1>
@foreach($featuredArticles as $article)
<div class="article-style-3">
	<a href="http://{{ preg_replace('#^https?://#', '', $article->website) }}" target="_blank"><h2>
	{{ (session('locale') == "en" ? $article->title : $article->bnTitle ) }}
	</h2></a>
	<div class="picbox">
		<a href="http://{{ preg_replace('#^https?://#', '', $article->website) }}" target="_blank">
			<img src="/images/articles/{{ $article->media }}" class="img-responsive" />
		</a>
	</div>
	<br>
	<div class="row">
		<div class="col-md-8"><b>{{ (session('locale') == "en" ? $article->featured_title : $article->bn_featured_title) }}</b></div>
		<div class="col-md-4 text-right">
			<span class="sek-color"><b>{{ (session('locale') == "en" ? $article->price : $article->bn_price) }} BDT</b></span> 
			<del>{{ (session('locale') == "en" ? $article->strike_price : $article->bn_strike_price) }} BDT</del>
		</div>
	</div>
	<p>{{ (session('locale') == "en" ? $article->featured_details : $article->bn_featured_details) }}</p>
	<div class="clearfix"></div>
</div>
@endforeach
<br />
<h1 class="article-3">GOING ON IN TOWN</h1>
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
	<div class="panel panel-default">
		<div class="panel-heading" role="tab" id="headingOne">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">LAST MINUTE</a>
			</h4>
		</div>
		<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
		<div class="panel-body">
			@foreach( $events as $event )
				<div class="article-style-3">
					<a href="http://{{ preg_replace('#^https?://#', '', $event->website) }}" target="_blank"><h2>{{ (session('locale') == "en" ? $event->title : $event->bnTitle ) }}</h2></a>
					<div class="picbox">
						<a href="http://{{ preg_replace('#^https?://#', '', $event->website) }}" target="_blank">
							<img src="/images/events/{{ $event->media }}" class="img-responsive" />
						</a>
						</div>
					<br>
					<div class="row">
						<div class="col-md-8"><b>{{ $event->featured_title }}</b></div>
						<div class="col-md-4 text-right">
							<span class="sek-color"><b>{{ $event->price }} BDT</b></span> 
							<del>{{ $event->strike_price }} BDT</del></div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-6"><i class="fa fa-map-marker fa-lg"></i> {{ $event->address->location }}</div>
						<div class="col-md-6"><i class="fa fa-clock-o fa-lg"></i> {{ \Carbon::parse($event->opening_date)->format('H:i:s') }}</div>
					</div>
					<div class="clearfix"></div>
				</div>
			@endforeach
		</div>
		</div>
	</div>

	<!--div class="panel panel-default">
		<div class="panel-heading" role="tab" id="headingTwo">
		<h4 class="panel-title">
		<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
		FIND EVENTS
		</a>
		</h4>
		</div>
		<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
			<div class="panel-body">
				<form>
					<div class="form-group"></div>
					<div class="checkbox">
					    <label>
					      <input type="checkbox"> See only free events
					    </label>
					</div>
					<div class="checkbox">
					    <label>
					      <input type="checkbox"> See only recommended
					    </label>
					</div>
					<hr>
					<div class="form-group">
					    <label for="exampleInputEmail1">When</label>
					    <select class="form-control">
						  <option>1</option>
						  <option>2</option>
						  <option>3</option>
						  <option>4</option>
						  <option>5</option>
						</select>
					</div>
					<hr>
					<div class="input-group">
						<input type="text" class="form-control" aria-label="...">
							<div class="input-group-btn">
							<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> <span class="caret"></span></button>
								<ul class="dropdown-menu dropdown-menu-right" role="menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li class="divider"></li>
								<li><a href="#">Separated link</a></li>
							</ul>
							</div>
					</div>
					<br>
				</form>
				<div class="text-center">
					<button type="button" class="btn btn-style-2">FIND</button>
				</div>
			</div>
		</div>
	</div-->

	<div class="panel panel-default">
		<div class="panel-heading" role="tab" id="headingThree">
		<h4 class="panel-title">
		<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">FEATURED EVENTS</a>
		</h4>
		</div>
		<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
			<div class="panel-body">
				@foreach($featuredEvents as $fevent)
					<a href="/details/event/{{ $fevent->id }}" style="text-decoration: none;">
						<div class="featured-event">
							<h1>{{ (session('locale') == "en" ? $fevent->title : $fevent->bnTitle ) }}</h1>
							<p>{{ $fevent->address->location }} <i class="fa fa-map-marker fa-2x"></i></p>
							<p>{{ (session('locale') == "en" ? $fevent->info_title : $fevent->bnInfo_title ) }}...</p>
							<p><i class="fa fa-calendar fa-2x"></i> {{ \Carbon::parse($fevent->opening_date)->format('D d M Y') }}<i class="fa fa-clock-o fa-2x"></i> The whole day</p>
						</div>
					</a>
				@endforeach
			</div>
		</div>
	</div>
</div>
<a href="/list/fevents" style="text-decoration: none;" target="_top">
	<button type="button" class="btn btn-style-1 btn-block">ALL FEATURED EVENTS</button>
</a>
<!---Facebook/Ads -->
<div class="add-container-1"><img src="/img/3rdcol-add-2.png" class="img-responsive"></div>
@foreach($bottomAds as $ad)
	@if($ad->ad_position->type == "Image")
	<div class="add-container-1"><a href="http://{{ $ad->link }}" target="_blank" title="{{ $ad->short_desc }}">
		<img src="/images/{{ $ad->image }}" class="img-responsive" /></a></div>
	@else
		<!--object type="application/x-shockwave-flash"
			data="your-flash-file.swf"
			width="0" height="0">
		<param name="movie" value="your-flash-file.swf" />
		<param name="quality" value="high"/>
		</object-->sds
		{{ $ad->image }}
	@endif
@endforeach
