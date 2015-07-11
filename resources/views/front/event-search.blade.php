<div class="panel panel-default">
	<div class="panel-heading" role="tab" id="headingTwo">
	<h4 class="panel-title">
	<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
	FIND EVENTS
	</a>
	</h4>
	</div>
	<div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
		<div class="panel-body">
			<form method="GET" action="/eventsearch">
				<div class="form-group"></div>
				<div class="checkbox">
				    <label>
				      <input  name="free"  id="free" type="checkbox"> See only free events
				    </label>
				</div>
				<div class="checkbox">
				    <label>
				      <input  name="recommend"  id="recommend" type="checkbox"> See only recommended
				    </label>
				</div>
				<hr>
				<div class="form-group">
				    <label for="exampleInputEmail1">Date From</label>
				    <select class="form-control" name="when" id="when">
				    	@for($i = 1; $i<=31; $i++)
					  <option value="{{$i}}">{{$i}}</option>
					@endfor
					</select>
				</div>
				<!--hr>
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
				<br-->
			<div class="text-center">
				<button type="submit" class="btn btn-style-2">FIND</button>
			</div>
		</form>
		</div>
	</div>
</div>
