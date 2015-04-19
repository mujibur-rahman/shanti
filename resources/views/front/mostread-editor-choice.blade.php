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
		<h1>EDITOR’S CHOICE</h1>
		<ol class="me-ol">
			@foreach($editorChoice as $editor)
				<li><a href="/details/article/{{ $editor->id }}">
					{{ substr($editor->title, 0, 35) }} ...
				</a></li>
			@endforeach
		</ol>
	</div>
</div>