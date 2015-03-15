@foreach($ads as $ad)
<div class="right-add-container">
	@if($ad->ad_position->type == "Image")
		<a href="http://{{ $ad->link }}" target="_blank" title="{{ $ad->title}}"><img src="images/{{ $ad->image }}"></a>
	@else
		<!--object type="application/x-shockwave-flash"
			data="your-flash-file.swf"
			width="0" height="0">
		<param name="movie" value="your-flash-file.swf" />
		<param name="quality" value="high"/>
		</object-->sds
		{{ $ad->image }}
	@endif
</div>
@endforeach