<div class="row">
	<div class="col-md-12">
		<div class="more-info-container">
			@foreach($featuredEvents as $fevent)

				@if( count($featuredEvents) % 2 == 1)
				<div class="more-info-box">
					<div class="more-info-iconbox"><a href="/details/event/{{$fevent->id}}"><i class="fa fa-chevron-right fa-3x"></i></a></div>
					<h1>More information</h1>
					<p>
						<b><span class="label label-style-1">Events</span> {{ $fevent->title }}</b><br>
						{{ $fevent->info_title }} 
					</p>
					<div class="row">
						<div class="col-md-4"><i class="fa fa-calendar fa-2x"></i>  {{ \Carbon::parse($fevent->opening_date)->format('D d M Y') }} </div>
						<div class="col-md-4"><i class="fa fa-clock-o fa-2x"></i>  The whole day</div>
						<div class="col-md-4"><i class="fa fa-ticket fa-2x"></i>  Buy ticket</div>
					</div>
					<br>
				</div>
				@else
				<div class="more-info-box more-info-box-2">
					<div class="more-info-iconbox"><a href="/details/event/{{$fevent->id}}"><i class="fa fa-chevron-right fa-3x"></i></a></div>
					<h1>More information</h1>
					<p>
						<b><span class="label label-style-1">Events</span> {{ $fevent->title }}</b><br>
						{{ $fevent->info_title }}
						<br /><i class="fa fa-map-marker fa-lg"></i> {{ $fevent->address->location }} <br>	
						<div class="fz-ratings">
							<a href=""><i class="fa fa-star fa-2x"></i></a>
							<a href=""><i class="fa fa-star fa-2x"></i></a>
							<a href=""><i class="fa fa-star fa-2x"></i></a>
							<a href=""><i class="fa fa-star fa-2x"></i></a>
							<a href=""><i class="fa fa-star fa-2x"></i></a>
							<span class="badge badge-style-1 ">17</span>
						</div>
					</p>
				</div>
				@endif
			@endforeach
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
	<div class="footer-social social text-center">
        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
        <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
        <a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a>
    </div>
    </div>
</div>

<div class="row">
	<div class="col-md-12 text-center">
		<nav>
			<ul class="pagination pagination-lg">
				<li><a href="#" aria-label="Previous"><span aria-hidden="true">« Back</span></a></li>
				<li><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">5</a></li>
				<li><a href="#" aria-label="Next"><span aria-hidden="true">» Next</span></a></li>
			</ul>
		</nav>
	</div>
</div>