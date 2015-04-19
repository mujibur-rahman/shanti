<div class="panel panel-default">
	<div class="panel-heading" role="tab" id="headingTwo">
	<h4 class="panel-title">
	<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
	CHANGE CATEGORY
	</a>
	</h4>
	</div>
	<div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
		<div class="panel-body">
			{!! Form::open(array('url'=>'/reviewsearch', 'method' => 'post')) !!}
				<div class="input-select">
				<select class="form-control" name="category" id="category">
					<option>Select</option>						
					@foreach($category as $k => $v)
						@if($selectCat && $selectCat == $k)
							<option selected value="{{ $k }}">{{ $v }}</option>
						@else
							<option value="{{ $k }}">{{ $v }}</option>
						@endif
					@endforeach	
				</select>
				</div>
			
			<div class="text-center" style="margin-top: 5px;">
				<button type="submit" class="btn btn-style-2">FIND</button>
			</div>
			{!! Form::close() !!}
		</div>
	</div>
</div>

