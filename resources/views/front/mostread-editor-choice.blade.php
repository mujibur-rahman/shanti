<div class="col-md-6">
	<div class="most-editor">
		<h1>MOST READ</h1>
			<ol class="me-ol">
				@foreach($mostReads as $most)
					<li><a href="/details/article/{{ $most->id }}">
						{{ substr($most->title, 0, 35) }} ...
					</a></li>
				@endforeach
			</ol>
	</div>
</div>
<div class="col-md-6">
	<div class="most-editor">
		<h1>EDITOR’S CHOISE</h1>
		<ol class="me-ol">
			<li>Lorem ipsum dolor sit amet</li>
			<li>Consectetur adipiscing elit</li>
			<li>Integer molestie lorem at massa</li>
			<li>Facilisis in pretium nisl aliquet</li>
			<li>Nulla volutpat aliquam velit</li>
		</ol>
	</div>
</div>