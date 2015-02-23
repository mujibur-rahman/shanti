@extends('app')
@section('content')
    @section('right')
    <aside class="right-side">
        <section class="content-header">
            <h1>Article Category</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="#admin/users/index">
                        <i class="livicon" data-color="#000" data-name="home" data-size="16" id="livicon-46" style="width: 16px; height: 16px;"></i>
                        Dashboard 
                    </a>
                </li>
                <li>Article</li>
                <li class="active">Edit category</li>
            </ol>
        </section>
        <section class="content paddingleft_right15">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4 class="panel-title"> <img src="#" />Edit category</h4>
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
                                    {!! Form::model($category, array('method' => 'PATCH', 'route' => array('category.update', $category->id) )) !!}
                                        <div class="form-group">
                                            {!! Form::label('title', 'Title:', array('class' => 'col-sm-2 control-label')) !!}
                                            <div class="col-sm-10">
                                                {!! Form::text('title', $category->title, array('class' => 'form-control required')) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('bengaliTitle', 'Bengali:', array('class' => 'col-sm-2 control-label')) !!}
                                            <div class="col-sm-10">
                                                {!! Form::text('bengaliTitle', $articleCategoryLang->title, array('class' => 'form-control required')) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('keyword', 'Keyword:', array('class' => 'col-sm-2 control-label')) !!}
                                            <div class="col-sm-10">
                                                {!! Form::textarea('keyword', $category->meta_keyword, array('style' => 'width: 100%; height: 104px;')) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('bengaliKeyword', 'Bengali:', array('class' => 'col-sm-2 control-label')) !!}
                                            <div class="col-sm-10">
                                                {!! Form::textarea('bengaliKeyword', $articleCategoryLang->meta_keyword, array('style' => 'width: 100%; height: 104px;')) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('description', 'Description:', array('class' => 'col-sm-2 control-label')) !!}
                                            <div class="col-sm-10">
                                                {!! Form::textarea('description', $category->meta_description, array('style' => 'width: 100%; height: 104px;')) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('bengaliDesc', 'Bengali:', array('class' => 'col-sm-2 control-label')) !!}
                                            <div class="col-sm-10">
                                                {!! Form::textarea('bengaliDesc', $articleCategoryLang->meta_description, array('style' => 'width: 100%; height: 104px;')) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('active', 'Active:', array('class' => 'col-sm-2 control-label')) !!}
                                            <div class="col-sm-10">
                                                @if( $category->isactive )
                                                    {!! Form::checkbox('active', '1', true, array('class' => 'pos-rel p-l-30')); !!}
                                                @else
                                                    {!! Form::checkbox('active', '1', false, array('class' => 'pos-rel p-l-30')); !!}
                                                @endif
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