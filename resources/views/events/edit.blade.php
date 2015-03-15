@extends('app')
@section('content')
	@section('right')
	<aside class="right-side">
	    <section class="content-header">
	        <h1>Events</h1>
	        <ol class="breadcrumb">
	            <li>
	                <a href="#admin/users/index">
	                    <i class="livicon" data-color="#000" data-name="home" data-size="16" id="livicon-46" style="width: 16px; height: 16px;"></i>
	                    Dashboard 
	                </a>
	            </li>
	            <li>Events</li>
	            <li class="active">Edit events</li>
	        </ol>
	    </section>
	    <section class="content paddingleft_right15">
	        <div class="row">
	            <div class="col-md-12">
	                <div class="panel panel-primary">
	                    <div class="panel-heading">
	                        <h4 class="panel-title"> <img src="#" />Edit existing event</h4>
	                         <span class="pull-right clickable">
	                            <i class="glyphicon glyphicon-chevron-up"></i>
	                        </span>
	                    </div>
	                    <div class="panel-body">
	                            <div class="error-panel">
	                                @if ($errors->any() )
	                                    <ul>
	                                        {!! implode('', $errors->all('<li class="errors">:message</li>'))  !!}
	                                    </ul>
	                                @endif 
	                            </div>

	                            <div class="table-responsives"> 
	                                <div class="content clearfix">
	                                {!! Form::model($event, array('method' => 'PATCH', 'files' => true, 'route' => array('events.update', $event->id) )) !!}
	                                <div class="row">
		                                <div class="col-sm-12">
		                                	<fieldset>
		                                		<legend>Article Titles</legend>
		                                		<div class="form-group">
			                                        {!! Form::label('category', 'Category:', array('class' => 'col-sm-1 control-label')) !!}
			                                        <div class="col-sm-10" style="margin-left: 10px;">

			                                        	{!! Form::select('category', $category, $event->article_category->id, array('class' => 'form-control required')) !!}
			                                        </div>
			                                    </div>
				                                <div class="form-group">
			                                        {!! Form::label('title', 'Title:', array('class' => 'col-sm-1 control-label')) !!}
			                                        <div class="col-sm-10" style="margin-left: 10px;">
			                                            {!! Form::text('title', $event->title, array('class' => 'form-control required')) !!}
			                                        </div>
			                                    </div>
			                                    <div class="form-group">
			                                        {!! Form::label('bengaliTitle', 'Bengali:', array('class' => 'col-sm-1 control-label')) !!}
			                                        <div class="col-sm-10" style="margin-left: 10px;">
			                                            {!! Form::text('bengaliTitle', $eventLang->title, array('class' => 'form-control required')) !!}
			                                        </div>
			                                    </div>
			                                </fieldset>
		                                </div>
		                                <hr />
		                                <div class="col-sm-12">
		                                	<fieldset>
		                                	<legend>Events Held On</legend>
		                                	<div class="col-sm-12">
			                                	<div class="form-group">
			                                        {!! Form::label('addres', 'Address:', array('class' => 'col-sm-1 control-label')) !!}
			                                        <div class="col-sm-11">
			                                            {!! Form::text('address', $event->address->location, array('class' => 'form-control required')) !!}
			                                        </div>
			                                    </div>
											</div>
		                                	<div class="col-sm-4">
			                                	<div class="form-group">
			                                        {!! Form::label('division', 'Division:', array('class' => 'col-sm-3 control-label')) !!}
			                                        <div class="col-sm-8" style="margin: 4px 0px 0px 5px;">
			                                            {!! Form::select('division', $division, $event->address->division->id, array('class' => 'form-control required')) !!}
			                                        </div>
			                                    </div>
											</div>

											<div class="col-sm-4">
			                                	<div class="form-group">
			                                        {!! Form::label('district', 'District:', array('class' => 'col-sm-2 control-label')) !!}
			                                        <div class="col-sm-9" style="margin: 4px 0px 0px 15px;">
			                                        	{!! Form::select('district', $district, $event->address->district->id, array('class' => 'form-control required' )) !!}
			                                        </div>
			                                    </div>
											</div>

											<div class="col-sm-4">
											    <div class="form-group">
			                                        {!! Form::label('thana', 'Thana:', array('class' => 'col-sm-2 control-label')) !!}
			                                        <div class="col-sm-10" style="margin: 4px 0px 0px 0px;">
			                                        	{!! Form::select('thana', $thana, $event->address->thana->id, array('class' => 'form-control required' )) !!}
			                                        </div>
			                                    </div>
											</div>
											 <div class="col-sm-12">
											 	<div class="col-sm-5">
												 	<div class="form-group">
				                                        {!! Form::label('country', 'Country:', array('class' => 'col-sm-2 control-label')) !!}
				                                        <div class="col-sm-10" style="margin: 4px 0px 0px 0px;">
				                                        	 {!! Form::select('country', $country, null, array('class' => 'form-control required')) !!}
				                                        </div>
				                                    </div>
				                                </div>
											 </div>
											</fieldset>
									    </div>
									    <hr />
									    <div class="col-sm-12">
									    	<fieldset>
		                                		<legend>Events details</legend>
		                                		<div class="col-sm-12">
		                                			<div class="col-sm-6">
				                                		<div class="form-group">
				                                			<div class="col-sm-2">
					                                        {!! Form::label('entrance', 'Entrance:', array('class' => 'col-sm-1 control-label')) !!}
					                                        </div>
					                                        <div class="col-sm-7" style="margin-left: 2px;">
					                                           {!! Form::select('entrance', array('' => 'Select', '1' => 'Free', '2' => 'Paid'), $event->entrance, array('class' => 'form-control required')) !!}
					                                        </div>
					                                    </div>
					                                </div>
					                                <div class="col-sm-6">
					                                	<div class="form-group">
					                                		<div class="col-sm-2">
					                                        {!! Form::label('fees', 'Fees:', array('class' => 'col-sm-1 control-label')) !!}
					                                        </div>
					                                        <div class="col-sm-7" style="margin-left: 0px;">
					                                            {!! Form::text('fees', $event->entrance_fees, array('class' => 'form-control required')) !!}
					                                        </div>
				                                    	</div>
					                                </div>
				                                </div>
				                                <hr />
				                                <div class="col-sm-12">
		                                			<div class="col-sm-6">
				                                		<div class="form-group">
				                                			<div class="col-sm-2">
					                                        {!! Form::label('openingDate', 'Opening date:', array('class' => 'col-sm-1 control-label')) !!}
					                                       </div>
					                                       <div class="col-sm-7" style="margin-left: 2px;">
					                                            {!! Form::text('openingDate', $event->opening_date, array('class' => 'form-control required')) !!}
					                                            <span class="add-on"><i class="icon-calendar"></i></span>
					                                        </div>
					                                    </div>
					                                </div>
					                                <div class="col-sm-6">
					                                	<div class="form-group">
					                                		<div class="col-sm-2">
					                                        {!! Form::label('endingDate', 'Ending date:', array('class' => 'col-sm-1 control-label')) !!}
					                                        </div>
					                                        <div class="col-sm-7" style="margin-left: 0px;">
					                                            {!! Form::text('endingDate', $event->ending_date, array('class' => 'form-control required')) !!}
					                                        </div>
				                                    	</div>
					                                </div>
				                                </div>

				                               
			                                    <div class="form-group" style="clear: both;">
			                                    </div>
											    <div class="form-group">
			                                        {!! Form::label('infoTitle', 'Information:', array('class' => 'col-sm-1 control-label')) !!}
			                                        <div class="col-sm-10" style="margin-left: 5px;">
			                                            {!! Form::text('infoTitle', $event->info_title, array('class' => 'form-control required')) !!}
			                                        </div>
			                                    </div>
			                                    <div class="form-group">
			                                        {!! Form::label('bengaliInfoTitle', 'Bengali:', array('class' => 'col-sm-1 control-label')) !!}
			                                        <div class="col-sm-10" style="margin-left: 5px;">
			                                            {!! Form::text('bengaliInfoTitle', $eventLang->info_title, array('class' => 'form-control required')) !!}
			                                        </div>
			                                    </div>
			                                    <div class="form-group">
			                                        {!! Form::label('Details', 'Details:', array('class' => 'col-sm-1 control-label')) !!}
			                                        <div class="col-sm-10" style="margin-left: 5px;">
			                                            {!! Form::textarea('details', $event->details, array('style' => 'width: 100%; height: 100px;')) !!}
			                                        </div>
			                                    </div>
			                                    <div class="form-group">
			                                        {!! Form::label('bengaliDetails', 'Bengali:', array('class' => 'col-sm-1 control-label')) !!}
			                                        <div class="col-sm-10" style="margin-left: 5px;">
			                                            {!! Form::textarea('bengaliDetails', $eventLang->details, array('style' => 'width: 100%; height: 100px;')) !!}
			                                        </div>
			                                    </div>
			                                     <div class="form-group">
			                                        {!! Form::label('media', 'Image:', array('class' => 'col-sm-1 control-label')) !!}
			                                        <div class="col-sm-10" style="margin-left: 5px;">
			                                            {!! Form::file('media', null, array('class' => 'form-control required')) !!}
			                                        </div>
			                                    </div>
			                                </fieldset>
		                                </div>
		                                <hr />
									    <div class="col-sm-12">
									    	<fieldset>
		                                		<legend>Meta description</legend>
											    <div class="form-group">
			                                        {!! Form::label('keyword', 'Keyword:', array('class' => 'col-sm-1 control-label')) !!}
			                                        <div class="col-sm-10" style="margin-left: 5px;">
			                                            {!! Form::textarea('keyword', $event->meta_keyword, array('style' => 'width: 100%; height: 104px;')) !!}
			                                        </div>
			                                    </div>
			                                    <div class="form-group">
			                                        {!! Form::label('bengaliKeyword', 'Bengali:', array('class' => 'col-sm-1 control-label')) !!}
			                                        <div class="col-sm-10" style="margin-left: 5px;">
			                                            {!! Form::textarea('bengaliKeyword', $eventLang->meta_keyword, array('style' => 'width: 100%; height: 104px;')) !!}
			                                        </div>
			                                    </div>
			                                    <div class="form-group">
			                                        {!! Form::label('description', 'Description:', array('class' => 'col-sm-1 control-label')) !!}
			                                        <div class="col-sm-10" style="margin-left: 5px;">
			                                            {!! Form::textarea('description', $event->meta_description, array('style' => 'width: 100%; height: 100px;')) !!}
			                                        </div>
			                                    </div>
			                                    <div class="form-group">
			                                        {!! Form::label('bengaliDescription', 'Bengali:', array('class' => 'col-sm-1 control-label')) !!}
			                                        <div class="col-sm-10" style="margin-left: 5px;">
			                                            {!! Form::textarea('bengaliDescription', $eventLang->meta_description, array('style' => 'width: 100%; height: 100px;')) !!}
			                                        </div>
			                                    </div>
			                                </fieldset>
		                                </div>
		                               <div class="col-sm-12">
		                                	<fieldset>
		                                		<legend>Featured deals</legend>
		                                		<div class="col-sm-12"> 
		                                			<div class="col-sm-6"> 
				                                		<div class="form-group">
					                                        {!! Form::label('last_minute', 'Last minute:', array('class' => 'col-sm-3 control-label')) !!}
					                                        <div class="col-sm-2" style="margin-top: 4px;">
					                                        	@if($event->last_minute)
					                                           		{!! Form::checkbox('last_minute', '1', true, array('class' => 'pos-rel p-l-30')); !!}
					                                           	@else
					                                           		{!! Form::checkbox('last_minute', '1', false, array('class' => 'pos-rel p-l-30')); !!}
					                                            @endif
					                                        </div>
					                                    </div>
				                                	</div>
			                               	 		<div class="col-sm-6">
				                                		<div class="form-group">
					                                        {!! Form::label('featured', 'Featured:', array('class' => 'col-sm-2 control-label')) !!}
					                                        <div class="col-sm-2" style=" margin-top: 4px;">
					                                            @if($event->featured)
					                                           		{!! Form::checkbox('featured', '1', true, array('class' => 'pos-rel p-l-30')); !!}
					                                           	@else
					                                           		{!! Form::checkbox('featured', '1', false, array('class' => 'pos-rel p-l-30')); !!}
					                                            @endif
					                                        </div>
					                                    </div>
				                               	 	</div>
				                                </div>
				                               <div class="col-sm-12"> 
			                                    <div class="form-group">
			                                        {!! Form::label('featured_title', 'Title:', array('class' => 'col-sm-1 control-label')) !!}
			                                        <div class="col-sm-10" style="margin-top: 4px;">
			                                            {!! Form::text('featured_title', $event->featured_title, array('class' => 'form-control required')) !!}
			                                        </div>
			                                    </div>
			                                   </div>
			                                    <div class="form-group">
			                                        {!! Form::label('price', 'Price:', array('class' => 'col-sm-1 control-label')) !!}
			                                        <div class="col-sm-2" style="margin-left: 10px; margin-top: 4px;">
			                                            {!! Form::text('price', $event->price, array('class' => 'form-control required')) !!}
			                                        </div>
			                                    </div>
			                                    <div class="form-group">
			                                        {!! Form::label('strike_price', 'Old price:', array('class' => 'col-sm-2 control-label')) !!}
			                                        <div class="col-sm-2" style="margin-top: 4px;">
			                                            {!! Form::text('strike_price', $event->strike_price, array('class' => 'form-control required')) !!}
			                                        </div>
			                                    </div>
			                                    <div class="col-sm-12">
				                                    <div class="form-group">
				                                        {!! Form::label('featured_details', 'Details:', array('class' => 'col-sm-1 control-label')) !!}
				                                        <div class="col-sm-10" style="margin-top: 4px;">
				                                            {!! Form::text('featured_details', $event->featured_details, array('class' => 'form-control required')) !!}
				                                        </div>
				                                    </div>
			                                	</div>
			                                </fieldset>
			                            </div>
										<div class="col-sm-12">
		                                	<fieldset>
		                                		<legend>Miscellaneous</legend>
		                                		<div class="form-group">
			                                        {!! Form::label('website', 'Website:', array('class' => 'col-sm-1 control-label')) !!}
			                                        <div class="col-sm-10" style="margin-left: 10px; margin-top: 4px;">
			                                            {!! Form::text('website', $event->website, array('class' => 'form-control required')) !!}
			                                        </div>
			                                    </div>
			                                    <div class="form-group">
			                                        {!! Form::label('email', 'Email:', array('class' => 'col-sm-1 control-label')) !!}
			                                        <div class="col-sm-10" style="margin-left: 10px;margin-top: 4px;">
			                                            {!! Form::text('email', $event->email, array('class' => 'form-control required')) !!}
			                                        </div>
			                                    </div>
				                                <div class="form-group">
			                                        {!! Form::label('phone', 'Phone:', array('class' => 'col-sm-1 control-label')) !!}
			                                        <div class="col-sm-10" style="margin-left: 10px;margin-top: 4px;">
			                                            {!! Form::text('phone', $event->phone, array('class' => 'form-control required')) !!}
			                                        </div>
			                                    </div>
			                                </fieldset>
		                                </div>
		                                 <hr />
		                                <div class="col-sm-12">
		                                	<div class="form-group">
		                                        {!! Form::label('active', 'Active:', array('class' => 'col-sm-1 control-label')) !!}
		                                        <div class="col-sm-10" style="margin-left: 10px;margin-top: 4px;">
		                                        	@if($event->is_active)
		                                           		{!! Form::checkbox('active', '1', true, array('class' => 'pos-rel p-l-30')); !!}
		                                           	@else
		                                           		{!! Form::checkbox('active', '1', false, array('class' => 'pos-rel p-l-30')); !!}
		                                            @endif
		                                        </div>
		                                    </div>
		                                </div>
		                                <hr />
		                                <div class="col-sm-12" style="margin-top: 4px;">
		                                	<div class="form-group">
	                                        <label class="col-sm-4 control-label"></label>
	                                        <div class="col-sm-6" >
	                                            {!! Form::button('Cancel', array('class' => 'btn btn-danger')) !!}
	                                            {!! Form::submit('Submit', array('class' => 'btn btn-success')) !!}
	                                        </div>
	                                    </div>  
		                               	</div>

									</div><!-- Row finishh-->           
	                                	{!! Form::close() !!}
	                                </div>
	                            </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </section>
	</aside>
	@endsection
@endsection
@section('scripts')
	{!! Html::script('ckeditor/ckeditor.js') !!}
	<script language="javascript">

	  var config = {
			codeSnippet_theme: 'monokai',
			language: 'en',
			height: 100,
			//filebrowserBrowseUrl: '{!! url($url) !!}',
			toolbarGroups: [
				{ name: 'clipboard',   groups: [ 'clipboard', 'undo' ] },
				{ name: 'editing',     groups: [ 'find', 'selection', 'spellchecker' ] },
				{ name: 'links' },
				{ name: 'insert' },
				{ name: 'forms' },
				{ name: 'tools' },
				{ name: 'document',	   groups: [ 'mode', 'document', 'doctools' ] },
				{ name: 'others' },
				//'/',
				{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
				{ name: 'paragraph',   groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ] },
				{ name: 'styles' },
				{ name: 'colors' }
			]
		};

	   	CKEDITOR.replace( 'details', config);
		CKEDITOR.replace( 'bengaliDetails', config);
	  //   $("#title").keyup(function(){
			// 	var str = sansAccent($(this).val());
			// 	str = str.replace(/[^a-zA-Z0-9\s]/g,"");
			// 	str = str.toLowerCase();
			// 	str = str.replace(/\s/g,'-');
			// 	//$("#permalien").val(str);
			// 	console.log('Mujibur: '+ str);        
			// });


	    $(document).ready(function($) {
	    	$('#district').val({{ $event->address->district->id }});
	    	$('#thana').val({{ $event->address->thana->id }});
	    	$('#division').change(function(event) {
	    		var division_id = this.value;
	    		if( division_id ){
	    			$.ajax({
	    				url: '/articles/getlists/' + division_id + '/district',
	    				type: 'GET',
	    				dataType: 'json',
	    			})
	    			.done(function( data ) {
	    				var district = '';
	  		  			$.each(data.list, function(id, val) {
	  		  				district += '<option value="' + id +'"> ' + val + '</option>';
	  		  			});
	  		  			$('#district').removeAttr('disabled');
	  		  			$('#district').html( district );
	    			})
	    			.fail(function( data ) {
	    				console.log("error", data);
	    			})
	    			.always(function( data ) {
	    				console.log("complete", data);
	    			});	    			
	    		}
	    	});

	    	//Thanas should be onchange to district
	    	$('#district').change(function(event) {
	    		var district_id = this.value;
	    		if( district_id ){
	    			$.ajax({
	    				url: '/articles/getlists/' + district_id + '/thana',
	    				type: 'GET',
	    				dataType: 'json',
	    			})
	    			.done(function( data ) {
	    				var thana = '';
	  		  			$.each(data.list, function(id, val) {
	  		  				thana += '<option value="' + id +'"> ' + val + '</option>';
	  		  			});
	  		  			$('#thana').removeAttr('disabled');
	  		  			$('#thana').html( thana );
	    			})
	    			.fail(function( data ) {
	    				console.log("error", data);
	    			})
	    			.always(function( data ) {
	    				console.log("complete", data);
	    			});
	    			
	    		}
	    	});

	    	$('#entrance').change(function( event ){
				var type = this.value;
				$('#fees').removeAttr('disabled');
				$('#fees').val('');
				if(type == 1 || type == ''){
					$('#fees').val('0.00');
					$('#fees').attr('disabled', 'true');
				}
			});

	    });
	  </script>
	  	{!! Html::style('datetimepicker/jquery.datetimepicker.css') !!}
	   	{!! Html::script('datetimepicker/jquery.datetimepicker.js') !!}
	  <script language="javascript">
		  $(document).ready(function() {
		  		jQuery('#openingDate').datetimepicker({
		  			format: 'Y-m-d H:i:00',
				  	startDate:'+1971/05/01',
				 	closeOnTimeSelect:true
				});

				jQuery('#endingDate').datetimepicker({
		  			format: 'Y-m-d H:i:00',
				  	startDate:'+1971/05/01',
				 	closeOnTimeSelect:true,
				});			
		  });
	  </script>
@endsection