@extends('app')
@section('content')
	@section('right')
	<aside class="right-side">
	    <section class="content-header">
	        <h1>Footer Slider</h1>
	        <ol class="breadcrumb">
	            <li>
	                <a href="#admin/users/index">
	                    <i class="livicon" data-color="#000" data-name="home" data-size="16" id="livicon-46" style="width: 16px; height: 16px;"></i>
	                    Dashboard 
	                </a>
	            </li>
	            <li>Footer Slider</li>
	            <li class="active">Edit Footer Slider</li>
	        </ol>
	    </section>
	    <section class="content paddingleft_right15">
	        <div class="row">
	            <div class="col-md-12">
	                <div class="panel panel-primary">
	                    <div class="panel-heading">
	                        <h4 class="panel-title"> <img src="#" />Edit Footer Slider</h4>
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
	                                {!! Form::model($footerslider, array('method' => 'PATCH', 'files' => true,  'route' => array('footersliders.update', $footerslider->id) )) !!}
	                               
                                   <div class="row">
		                                <div class="col-sm-12">
				                            <fieldset>
		                                		<legend>FooterSlider information</legend>
		                                		
		                                	
					                            <div class="col-sm-12">
			                                		<div class="form-group">
			                                			<div class="col-sm-2">
				                                        	{!! Form::label('title', 'URL:', array('class' => 'control-label')) !!}
				                                    	</div>
				                                        <div class="col-sm-9" >
				                                            {!! Form::text('title', $footerslider->short_desc, array('class' => 'form-control required')) !!}
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
                                                        <div class="col-sm-5" >
				                                          
		                                                       <img src="/images/{{ $footerslider->image }}" />
		                                                      
				                                        </div>
				                                    </div>
			                                	</div>
			                                	
				                                <div class="col-sm-12">
		                                	<div class="form-group">
		                                		<div class="col-sm-2">
		                                        	{!! Form::label('active', 'Active:', array('class' => 'control-label')) !!}
		                                    	</div>
		                                        <div class="col-sm-9">
		                                        	@if($footerslider->is_active)
		                                            	{!! Form::checkbox('active', '1', true, array('class' => 'pos-rel p-l-30')); !!}
		                                            @else
		                                            	{!! Form::checkbox('active', '1', false, array('class' => 'pos-rel p-l-30')); !!}
		                                            @endif
		                                       
		                                        </div>
		                                    </div>
		                                </div>
			                                    
			                                </fieldset>
		                                </div>
		                                <hr />
		                              
		                                <div class="col-sm-12" style="margin-top: 4px;">
		                                	<div class="form-group">
	                                        <label class="col-sm-4 control-label"></label>
	                                        <div class="col-sm-6" >
	                                            {!! Form::button('Cancel', array('class' => 'btn btn-danger')) !!}
	                                            {!! Form::submit('Edit', array('class' => 'btn btn-success')) !!}
	                                        </div>
	                                    </div>  
		                               	</div>

									</div>
                                   
                                   
                                    <!-- Row finishh-->           
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
	 	    
		$('.col-sm-5').css({
			top: - ($('.col-sm-5').height() - 80) + 'px',
			position: 'absolute',
			right: '0px'
		});
		$('.col-sm-5 img').css({
			width: '280px',
			height: '220px'
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
