@extends('app')
@section('content')
	@section('right')
	<aside class="right-side">
	    <section class="content-header">
	        <h1>Articles</h1>
	        <ol class="breadcrumb">
	            <li>
	                <a href="#admin/users/index">
	                    <i class="livicon" data-color="#000" data-name="home" data-size="16" id="livicon-46" style="width: 16px; height: 16px;"></i>
	                    Dashboard 
	                </a>
	            </li>
	            <li>Articles</li>
	            <li class="active">Add articles</li>
	        </ol>
	    </section>
	    <section class="content paddingleft_right15">
	        <div class="row">
	            <div class="col-md-12">
	                <div class="panel panel-primary">
	                    <div class="panel-heading">
	                        <h4 class="panel-title"> <img src="#" />Add new article</h4>
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
	                                {!! Form::open(array('route' => 'articles.store')) !!}
	                                <div class="row">
		                                <div class="col-sm-12">
		                                	<fieldset>
		                                		<legend>Article Titles</legend>
		                                		<div class="form-group">
			                                        {!! Form::label('category', 'Category:', array('class' => 'col-sm-1 control-label')) !!}
			                                        <div class="col-sm-10" style="margin-left: 10px;">
			                                        	{!! Form::select('category', $category, null, array('class' => 'form-control required')) !!}
			                                        </div>
			                                    </div>
				                                <div class="form-group">
			                                        {!! Form::label('title', 'Title:', array('class' => 'col-sm-1 control-label')) !!}
			                                        <div class="col-sm-10" style="margin-left: 10px;">
			                                            {!! Form::text('title', null, array('class' => 'form-control required')) !!}
			                                        </div>
			                                    </div>
			                                    <div class="form-group">
			                                        {!! Form::label('permalink', 'Permalink:', array('class' => 'col-sm-1 control-label')) !!}
			                                        <div class="col-sm-7" style="margin-left: 10px; margin-top: 4px;">
			                                            {!! $url !!}{!! Form::text('permalink', null, array('class' => 'form-control required')) !!}
			                                        </div>
			                                    </div>
			                                </fieldset>
		                                </div>
		                                <hr />
		                                <div class="col-sm-12">
		                                	<fieldset>
		                                		<legend>Address</legend>
		                                	<div class="col-sm-12">
			                                	<div class="form-group">
			                                        {!! Form::label('addres', 'Address:', array('class' => 'col-sm-1 control-label')) !!}
			                                        <div class="col-sm-11">
			                                            {!! Form::text('address', null, array('class' => 'form-control required')) !!}
			                                        </div>
			                                    </div>
											</div>
		                                	<div class="col-sm-4">
			                                	<div class="form-group">
			                                        {!! Form::label('division', 'Division:', array('class' => 'col-sm-3 control-label')) !!}
			                                        <div class="col-sm-8" style="margin: 4px 0px 0px 5px;">
			                                            {!! Form::select('division', $division, null, array('class' => 'form-control required')) !!}
			                                        </div>
			                                    </div>
											</div>

											<div class="col-sm-4">
			                                	<div class="form-group">
			                                        {!! Form::label('district', 'District:', array('class' => 'col-sm-2 control-label')) !!}
			                                        <div class="col-sm-9" style="margin: 4px 0px 0px 15px;">
			                                        	{!! Form::select('district', array('Select'), null, array('class' => 'form-control required', 'disabled' => 'true' )) !!}
			                                        </div>
			                                    </div>
											</div>

											<div class="col-sm-4">
											    <div class="form-group">
			                                        {!! Form::label('thana', 'Thana:', array('class' => 'col-sm-2 control-label')) !!}
			                                        <div class="col-sm-10" style="margin: 4px 0px 0px 0px;">
			                                            {!! Form::select('thana', array('Select'), null, array('class' => 'form-control required' , 'disabled' => 'true' )) !!}
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
		                                		<legend>Article details</legend>
											    <div class="form-group">
			                                        {!! Form::label('shortDetails', 'Short:', array('class' => 'col-sm-1 control-label')) !!}
			                                        <div class="col-sm-10" style="margin-left: 5px;">
			                                            {!! Form::textarea('shortDetails', null, array('style' => 'width: 100%; height: 104px;')) !!}
			                                        </div>
			                                    </div>
			                                    <div class="form-group">
			                                        {!! Form::label('Details', 'Details:', array('class' => 'col-sm-1 control-label')) !!}
			                                        <div class="col-sm-10" style="margin-left: 5px;">
			                                            {!! Form::textarea('details', null, array('style' => 'width: 100%; height: 100px;')) !!}
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
			                                            {!! Form::textarea('keyword', null, array('style' => 'width: 100%; height: 104px;')) !!}
			                                        </div>
			                                    </div>
			                                    <div class="form-group">
			                                        {!! Form::label('description', 'Description:', array('class' => 'col-sm-1 control-label')) !!}
			                                        <div class="col-sm-10" style="margin-left: 5px;">
			                                            {!! Form::textarea('description', null, array('style' => 'width: 100%; height: 100px;')) !!}
			                                        </div>
			                                    </div>
			                                </fieldset>
		                                </div>
		                                <hr />
		                                <div class="col-sm-12">
		                                	<div class="form-group">
		                                        {!! Form::label('active', 'Active:', array('class' => 'col-sm-1 control-label')) !!}
		                                        <div class="col-sm-11">
		                                            {!! Form::checkbox('active', '1', true, array('class' => 'pos-rel p-l-30')); !!}
		                                        </div>
		                                    </div>
		                                </div>
										<div class="col-sm-12">
		                                	<fieldset>
		                                		<legend>Miscellaneous</legend>
		                                		<div class="form-group">
			                                        {!! Form::label('website', 'Website:', array('class' => 'col-sm-1 control-label')) !!}
			                                        <div class="col-sm-10" style="margin-left: 10px; margin-top: 4px;">
			                                            {!! Form::text('website', null, array('class' => 'form-control required')) !!}
			                                        </div>
			                                    </div>
			                                    <div class="form-group">
			                                        {!! Form::label('email', 'Email:', array('class' => 'col-sm-1 control-label')) !!}
			                                        <div class="col-sm-10" style="margin-left: 10px;margin-top: 4px;">
			                                            {!! Form::text('email', null, array('class' => 'form-control required')) !!}
			                                        </div>
			                                    </div>
				                                <div class="form-group">
			                                        {!! Form::label('phone', 'Phone:', array('class' => 'col-sm-1 control-label')) !!}
			                                        <div class="col-sm-10" style="margin-left: 10px;margin-top: 4px;">
			                                            {!! Form::text('phone', null, array('class' => 'form-control required')) !!}
			                                        </div>
			                                    </div>
			                                </fieldset>
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

	    CKEDITOR.replace( 'shortDetails', config);
	    config['height'] = 200;
		CKEDITOR.replace( 'details', config);
	    $("#title").keyup(function(){
				var str = sansAccent($(this).val());
				str = str.replace(/[^a-zA-Z0-9\s]/g,"");
				str = str.toLowerCase();
				str = str.replace(/\s/g,'-');
				//$("#permalien").val(str);
				console.log('Mujibur: '+ str);        
			});



	    $(document).ready(function($) {
	    	$('#district').attr('disabled', 'disabled');
	    	$('#thana').attr('disabled', 'disabled');
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
	    });
	  </script>
@endsection