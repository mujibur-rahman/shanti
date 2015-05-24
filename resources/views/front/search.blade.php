<div class="row">
	<div class="col-md-7">
		<form method="get" action="/categorysearch" >
			<div class="input-group">
				<div style="width:33%;">
					<select class="form-control" name="category">
						  <option value="all">{{ trans('front/site.cat-title') }}
						  </option>
						  @foreach($categoryLists as $cl)
						  	@if(session('locale') == "en" )
						  		<option value="{{ $cl->id}}">{{ $cl->title}}</option>
						  	@else
						  		<option value="{{ $cl->id}}">{{ $cl->bnTitle}}</option>
						  	@endif
						  @endforeach
						</select>
				</div>
				<input type="text" class="form-control" style="width:67%;" name="q" aria-label="...">
				<div class="input-group-btn">
					<button type="submit" class="btn btn-default">Search</button>
				</div>
			</div><!-- /input-group -->
		</form>
	</div>
	<div class="col-md-5">
		<select class="form-control" onchange="if (this.value) window.location.href=this.value">
			<option>{{ trans('front/site.search-fav') }}</option>
			@foreach($listEvent as $le)
				<option value="/details/event/{{ $le->id}}">{{ (session('locale') == "en" ? $le->title : $le->bnTitle)}}</option>
			@endforeach
		</select>
	</div>
</div>
