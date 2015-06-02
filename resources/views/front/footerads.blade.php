<div class="row">
	@foreach($footersliders as $fslider)
		<div class="col-md-4">
			<div class="footer-add-container">
				<a href="http://{{ preg_replace('#^https?://#', '', $fslider->title) }}" target="_blank">
					<img src="/images/{{ $fslider->image }}" width="370px" height="156px" />
				</a>
			</div>
		</div>
	@endforeach
</div>
