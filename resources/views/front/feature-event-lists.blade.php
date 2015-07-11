<div class="row">
	<div class="col-md-12">
		<div class="more-info-container">
			@foreach($featuredEvents as $key => $fevent)

				<div class="more-info-box">
					<div class="more-info-iconbox"><a href="/details/event/{{$fevent->id}}"><i class="fa fa-chevron-right fa-3x"></i></a></div>
					<h1>More information</h1>
					<p>
						<b><span class="label label-style-1">Events</span> {{ (session('locale') == "en" ? $fevent->title  : $fevent->bnTitle ) }}</b><br>
						{{ (session('locale') == "en" ? $fevent->info_title  : $fevent->bnInfo_title ) }}
					</p>
					<div class="row">
						<div class="col-md-4"><i class="fa fa-calendar fa-2x"></i>  {{ \Carbon::parse($fevent->opening_date)->format('D d M Y') }} </div>
						<div class="col-md-4"><i class="fa fa-clock-o fa-2x"></i>  The whole day</div>
						<div class="col-md-4"><i class="fa fa-ticket fa-2x"></i>  Buy ticket</div>
					</div>
					<br>
				</div>
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
			<!--Pagination-->
			{!! $featuredEvents !!}
		</nav>
	</div>
</div>
