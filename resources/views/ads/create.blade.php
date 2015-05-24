@extends('app')
@section('content')
	@section('right')
	<aside class="right-side">
	    <section class="content-header">
	        <h1>Ads</h1>
	        <ol class="breadcrumb">
	            <li>
	                <a href="#admin/users/index">
	                    <i class="livicon" data-color="#000" data-name="home" data-size="16" id="livicon-46" style="width: 16px; height: 16px;"></i>
	                    Dashboard 
	                </a>
	            </li>
	            <li>Ads</li>
	            <li class="active">Add ads</li>
	        </ol>
	    </section>
	    <section class="content paddingleft_right15">
	        <div class="row">
	            <div class="col-md-12">
	                <div class="panel panel-primary">
	                    <div class="panel-heading">
	                        <h4 class="panel-title"> <img src="#" />Add new ads</h4>
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
	                                {!! Form::open(array('route' => 'ads.store', 'files'=> true)) !!}
	                                <div class="row">
		                                <div class="col-sm-12">
				                            <fieldset>
		                                		<legend>Ads information</legend>
		                                		<div class="col-sm-12">
	                                				<div class="form-group">
			                                			<div class="col-sm-2">
				                                        {!! Form::label('type', 'Type:', array('class' => 'control-label')) !!}
				                                        </div>
				                                        <div class="col-sm-4">
				                                           {!! Form::select('type', array('' => 'Select', 'Image' => 'Image', 'Flash' => 'Flash'), null, array('class' => 'form-control required')) !!}
				                                        </div>
				                                    </div>
					                        </div>
		                                		<div class="col-sm-12">
			                                		<div class="form-group">
			                                			<div class="col-sm-2">
				                                        {!! Form::label('startDate', 'Start date:', array('class' => 'control-label')) !!}
				                                       </div>
				                                       <div class="col-sm-4" >
				                                            {!! Form::text('startDate', null, array('class' => 'form-control required')) !!}
				                                            <span class="add-on"><i class="icon-calendar"></i></span>
				                                        </div>
				                                    </div>
					                            </div>
					                            <div class="col-sm-12">
				                                   	<div class="form-group">
				                                		<div class="col-sm-2">
				                                        {!! Form::label('endDate', 'End date:', array('class' => 'control-label')) !!}
				                                        </div>
				                                        <div class="col-sm-4" style="margin-left: 0px;">
				                                            {!! Form::text('endDate', null,  array('class' => 'form-control required')) !!}
				                                        </div>
			                                    	</div>
				                                </div>
					                            <div class="col-sm-12">	                               
				                                	<div class="form-group">
				                                		<div class="col-sm-2">
				                                        {!! Form::label('title', 'Title:', array('class' => 'control-label')) !!}
				                                        </div>
				                                        <div class="col-sm-4">
				                                            {!! Form::select('title', array('' => 'Select', 'Top Large Leaderboard Ad Box-1 (w:h-1170px:auto)' => 'Top Large Leaderboard Ad Box-1 (w:h-1170px:auto)', 
				                                            'Small Rectangle Ad Box-1 (w:h-270px:190px)' => 'Small Rectangle Ad Box-1 (w:h-270px:190px)', 'Vertical Rectangle Ad Box-1 (w:h-270px:500px)' => 'Vertical Rectangle Ad Box-1 (w:h-270px:500px)', 'Large Rectangle Ad Box-1 (w:h-370px:155px)' => 'Large Rectangle Ad Box-1 (w:h-370px:155px)', 'Double Billboard Ad Box-1 (w:h-770px:155px)' => 'Double Billboard Ad Box-1 (w:h-770px:155px)'), null, array('class' => 'form-control required')) !!}
				                                        </div>
			                                    	</div>
				                                </div>
				                                <div class="col-sm-12" id="image-box">
			                                		<div class="form-group">
			                                			<div class="col-sm-2">
				                                        	{!! Form::label('image', 'Image:', array('class' => 'control-label')) !!}
				                                    	</div>
				                                        <div class="col-sm-5" >
				                                            {!! Form::file('image', null, array('class' => 'form-control required')) !!}
				                                        </div>
				                                    </div>
			                                	</div>
			                                	<div class="col-sm-12" id="flash-box" style="display: none;">
				                                    <div class="form-group">
				                                    	<div class="col-sm-2">
				                                        	{!! Form::label('flash', 'Flash:', array('class' => 'control-label')) !!}
				                                   		</div>
				                                        <div class="col-sm-9">
				                                            {!! Form::textarea('flash', null, array('style' => 'width: 100%; height: 100px;')) !!}
				                                        </div>
				                                    </div>
			                                	</div>
				                                <div class="col-sm-12">
			                                		<div class="form-group">
			                                			<div class="col-sm-2">
				                                        	{!! Form::label('short_desc', 'Short desc:', array('class' => 'control-label')) !!}
				                                    	</div>
				                                        <div class="col-sm-9" >
				                                            {!! Form::text('short_desc', null, array('class' => 'form-control required')) !!}
				                                        </div>
				                                    </div>
			                                	</div>
			                                    <div class="col-sm-12">
				                                    <div class="form-group">
				                                    	<div class="col-sm-2">
				                                        	{!! Form::label('Details', 'Details desc:', array('class' => 'control-label')) !!}
				                                   		</div>
				                                        <div class="col-sm-9">
				                                            {!! Form::textarea('details', null, array('style' => 'width: 100%; height: 100px;')) !!}
				                                        </div>
				                                    </div>
			                                </div>
			                                <div class="col-sm-12">
                                				<div class="form-group">
		                                			<div class="col-sm-2">
			                                        {!! Form::label('position', 'Position:', array('class' => 'control-label')) !!}
			                                        </div>
			                                        <div class="col-sm-4">
			                                           {!! Form::select('position', array('' => 'Select', 'Top' => 'Top', 'Bottom' => 'Bottom', 'Top-Right' => 'Top-Right', 'Bottom-Right' => 'Bottom-Right'), null, array('class' => 'form-control required')) !!}
			                                        </div>
			                                    </div>
				                        </div>
			                                </fieldset>
		                                </div>
		                                <hr />
		                                <div class="col-sm-12">
									    	<fieldset>
		                                		<legend>Ads rate</legend>
		                                		<div class="col-sm-12">
	                                				<div class="form-group">
			                                			<div class="col-sm-2">
				                                        	{!! Form::label('duration', 'Duration:', array('class' => 'control-label')) !!}
				                                        </div>
				                                        <div class="col-sm-3">
				                                         	{!! Form::text('duration', null, array('class' => 'form-control required')) !!}
				                                        </div>
				                                    </div>
					                            </div>
					                            <div class="col-sm-12">
				                                	<div class="form-group">
				                                		<div class="col-sm-2">
				                                        	{!! Form::label('rate', 'Rate:', array('class' => 'control-label')) !!}
				                                        </div>
				                                        <div class="col-sm-3" >
				                                           {!! Form::text('rate', null, array('class' => 'form-control required')) !!}
				                                        </div>
			                                    	</div>
				                                </div>
				                                <hr />
				                                <div class="col-sm-12">
		                                			<div class="form-group">
			                                			<div class="col-sm-2">
				                                        	{!! Form::label('ad_limit', 'Limit:', array('class' => 'control-label')) !!}
				                                       	</div>
				                                       	<div class="col-sm-3">
				                                            {!! Form::text('ad_limit', null, array('class' => 'form-control required')) !!}
				                                        </div>
					                                </div>			                               
				                                </div>
				                                <hr />
				                               <div class="col-sm-12">
				                               		<div class="form-group">
				                               			<div class="col-sm-2">
			                                       			{!! Form::label('ad_detail', 'Details:', array('class' => 'control-label')) !!}
			                                    		</div>
			                                        <div class="col-sm-9">
			                                            {!! Form::text('ad_detail', null, array('class' => 'form-control required')) !!}
			                                        </div>
			                                    </div>
				                               </div>
				                                 <div class="form-group" style="clear: both;">
			                                    </div>
				                            </fieldset>
				                        </div>
				                        <hr />
		                                <div class="col-sm-12">
		                                	<fieldset>
		                                		<legend>Ads corporate</legend>
		                                		<div class="col-sm-12">
			                                		<div class="form-group">
			                                			<div class="col-sm-2">
				                                        	{!! Form::label('website', 'Website:', array('class' => 'control-label')) !!}
				                                    	</div>
				                                        <div class="col-sm-9">
				                                            {!! Form::text('website', null, array('class' => 'form-control required')) !!}
				                                        </div>
				                                    </div>
			                                	</div>
			                                	<div class="col-sm-12">
			                                		<div class="form-group">
			                                			<div class="col-sm-2">
				                                        	{!! Form::label('is_paid', 'Is paid:', array('class' => 'control-label')) !!}
				                                    	</div>
				                                        <div class="col-sm-9">
				                                            {!! Form::checkbox('is_paid', '1', false, array('class' => 'pos-rel p-l-30')); !!}
				                                        </div>
				                                    </div>
			                                	</div>
			                                	<div class="col-sm-12">
			                                		<div class="form-group">
			                                			<div class="col-sm-2">
				                                        	{!! Form::label('is_lifetime', 'Is lifetime:', array('class' => 'control-label')) !!}
				                                    	</div>
				                                        <div class="col-sm-9">
				                                            {!! Form::checkbox('is_lifetime', '1', false, array('class' => 'pos-rel p-l-30')); !!}
				                                        </div>
				                                    </div>
			                                	</div>
			                                	<div class="col-sm-12">
			                                		<div class="form-group">
			                                			<div class="col-sm-2">
				                                        	{!! Form::label('is_pending', 'Is pending:', array('class' => 'control-label')) !!}
				                                    	</div>
				                                        <div class="col-sm-9">
				                                            {!! Form::checkbox('is_pending', '1', false, array('class' => 'pos-rel p-l-30')); !!}
				                                        </div>
				                                    </div>
			                                	</div>
			                                    
			                                </fieldset>
		                                </div>
									    <div class="col-sm-12">
									    	<fieldset>
		                                		<legend>Meta description</legend>
											    <div class="form-group">
											    	<div class="col-sm-2">
			                                        	{!! Form::label('keyword', 'Keyword:', array('class' => 'control-label')) !!}
			                                    	</div>
			                                        <div class="col-sm-9">
			                                            {!! Form::textarea('keyword', null, array('style' => 'width: 100%; height: 104px;')) !!}
			                                        </div>
			                                    </div>
			                                    <div class="form-group">
			                                    	<div class="col-sm-2">
			                                        	{!! Form::label('description', 'Description:', array('class' => 'col-sm-1 control-label')) !!}
			                                    	</div>
			                                        <div class="col-sm-9">
			                                            {!! Form::textarea('description', null, array('style' => 'width: 100%; height: 100px;')) !!}
			                                        </div>
			                                    </div>
			                                </fieldset>
		                                </div>
		                                <hr />
		                                <div class="col-sm-12">
		                                	<div class="form-group">
		                                		<div class="col-sm-2">
		                                        	{!! Form::label('active', 'Active:', array('class' => 'control-label')) !!}
		                                    	</div>
		                                        <div class="col-sm-9">
		                                            {!! Form::checkbox('active', '1', true, array('class' => 'pos-rel p-l-30')); !!}
		                                        </div>
		                                    </div>
		                                </div>
										
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
			toolbarGroups: [
				{ name: 'clipboard',   groups: [ 'clipboard', 'undo' ] },
				{ name: 'editing',     groups: [ 'find', 'selection', 'spellchecker' ] },
				{ name: 'links' },
				{ name: 'insert' },
				{ name: 'forms' },
				{ name: 'tools' },
				{ name: 'document',	   groups: [ 'mode', 'document', 'doctools' ] },
				{ name: 'others' },
				{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
				{ name: 'paragraph',   groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ] },
				{ name: 'styles' },
				{ name: 'colors' }
			]
		};

	 	CKEDITOR.replace( 'details', config);
	 
	     //  	$('#entrance').change(function( event ){
	    	// 	var type = this.value;
	    	// 	$('#fees').removeAttr('disabled');
	    	// 	$('#fees').val('');
	    	// 	if(type == 1 || type == ''){
	    	// 		$('#fees').val('0.00');
	    	// 		$('#fees').attr('disabled', 'true');
	    	// 	}

	    	// });
	    	$('#type').change(function(event) {
	    		var type = $('#type').val();
	    		if(type == 'Image'){
	    			$('#image-box').show();
	    			$('#flash-box').hide();
	    		}
	    		else if(type == 'Flash'){
	    			$('#image-box').hide();
	    			$('#flash-box').show();
	    		}
	    		else{
	    			$('#image-box').hide();
	    			$('#flash-box').hide();
	    		}
	    	});
	  </script>
 	   {!! Html::style('datetimepicker/jquery.datetimepicker.css') !!}
	   {!! Html::script('datetimepicker/jquery.datetimepicker.js') !!}
	  <script language="javascript">
	  $(document).ready(function() {
	  		jQuery('#startDate').datetimepicker({
	  			format: 'Y-m-d',
			  	startDate:'+1971/05/01',
			  	timepicker:false,
			  	closeOnDateSelect:true
			});

			jQuery('#endDate').datetimepicker({
	  			format: 'Y-m-d',
			  	startDate:'+1971/05/01',
			  	timepicker:false,
			  	closeOnDateSelect:true
			});			
	  });
	  </script>
@endsection
