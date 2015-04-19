@extends('app')
@section('content')
    @section('right')
    <aside class="right-side">
        <section class="content-header">
            <h1>Tags</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="#admin/users/index">
                        <i class="livicon" data-color="#000" data-name="home" data-size="16" id="livicon-46" style="width: 16px; height: 16px;"></i>
                        Dashboard 
                    </a>
                </li>
                <li>Tags</li>
                <li class="active">Edit tags</li>
            </ol>
        </section>
        <section class="content paddingleft_right15">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4 class="panel-title"> <img src="#" />Edit tags</h4>
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
                                
                                <div class="table-responsive"> 
                                    <div class="content clearfix">
                                    {!! Form::model($tag, array('method' => 'PATCH', 'route' => array('tags.update', $tag->id) )) !!}
                                        <div class="form-group">
                                            {!! Form::label('tag', 'Tag:', array('class' => 'col-sm-2 control-label')) !!}
                                            <div class="col-sm-10">
                                                {!! Form::text('tag', $tag->tag, array('class' => 'form-control required')) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('bengaliTag', 'Bengali:', array('class' => 'col-sm-2 control-label')) !!}
                                            <div class="col-sm-10">
                                                {!! Form::text('bengaliTag', $tag->tagBengali, array('class' => 'form-control required')) !!}
                                            </div>
                                        </div>                                        
                                        
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label"></label>
                                            <div class="col-sm-10">
                                                {!! Form::button('Cancel', array('class' => 'btn btn-danger')) !!}
                                                {!! Form::submit('Update', array('class' => 'btn btn-success')) !!}
                                            </div>
                                        </div>                                        
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