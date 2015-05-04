<div class="row">
	@foreach($footersliders as $fslider)
		<div class="col-md-4"><div class="footer-add-container">
			<img src="/images/{{ $fslider->image }}" width="370px" height="156px" /></div>
		</div>
	@endforeach
</div>
