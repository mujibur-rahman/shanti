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
                <li>Category</li>
                <li class="active">Article category list</li>
            </ol>
        </section>
        <section class="content paddingleft_right15">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary"> <!-- app.css panel-default-->
                    <div class="panel-heading">
                    <h4 class="panel-title"> <i data-hc="white" data-c="#fff" data-loop="true" data-size="16" data-name="user" class="livicon" id="livicon-47" style="width: 16px; height: 16px;"><svg height="16" version="1.1" width="16" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative;" id="canvas-for-livicon-47"><desc>Created with Raphaël 2.1.0</desc><defs/><path style="" fill="#ffffff" stroke="none" d="M21.291,21.271C20.116,20.788,19.645,19.452,19.645,19.452S19.116,19.756,19.116,18.908C19.116,18.058,19.645,19.452,20.176,16.179000000000002C20.176,16.179000000000002,21.644,15.753000000000002,21.351999999999997,12.238000000000003H20.997999999999998C20.997999999999998,12.238000000000003,21.880999999999997,8.479000000000003,20.997999999999998,7.206000000000003C20.115999999999996,5.933000000000003,19.763999999999996,5.085000000000003,17.820999999999998,4.477000000000003C15.879999999999997,3.8700000000000028,16.587999999999997,3.991000000000003,15.174999999999997,4.053000000000003C13.762999999999998,4.1140000000000025,12.585999999999997,4.902000000000003,12.585999999999997,5.325000000000003C12.585999999999997,5.325000000000003,11.703999999999997,5.386000000000003,11.351999999999997,5.750000000000003C10.998999999999997,6.1140000000000025,10.410999999999996,7.810000000000002,10.410999999999996,8.235000000000003S10.805999999999996,11.509000000000004,11.099999999999996,12.116000000000003L10.648999999999996,12.237000000000004C10.354999999999995,15.752000000000004,11.824999999999996,16.178000000000004,11.824999999999996,16.178000000000004C12.353999999999996,19.450000000000003,12.883999999999995,18.057000000000006,12.883999999999995,18.907000000000004C12.883999999999995,19.755000000000003,12.353999999999996,19.451000000000004,12.353999999999996,19.451000000000004S11.883999999999995,20.787000000000003,10.707999999999995,21.270000000000003C9.530999999999995,21.755000000000003,3.002999999999995,24.361000000000004,2.471999999999994,24.906000000000002C1.942,25.455,2.002,28,2.002,28H29.997999999999998C29.997999999999998,28,30.058999999999997,25.455,29.526999999999997,24.906C28.996,24.361,22.468,21.756,21.291,21.271Z" stroke-width="0" transform="matrix(0.5,0,0,0.5,0,0)"/></svg>
                </i>
                        Category lists
                    </h4>
                </div>
                        <div class="panel-body">
                           <div class="dataTables_wrapper no-footer" id="table_wrapper">
                            <div class="table-responsive"> 

                                @if ($categories->count())
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Bengali</th>
                                				<th>Description</th>
                                                <th colspan="2">Actions</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($categories as $category)
                                                <tr>
                                                    <td>{{ $category->title }}</td>
                                                    <td>{{ $category->bnTitle }}</td>
                                					<td>{{ substr($category->meta_description, 0, 30) }} ...</td>
                                                    <td width="10">{!! link_to_route('category.show', 'View', array($category->id), array('class' => 'btn btn-info')) !!}</td>
                                                    <td width="10">{!! link_to_route('category.edit', 'Edit', array($category->id), array('class' => 'btn btn-warning')) !!}</td>
                                                    <!--td width="10">
                                                        {!! Form::open(array('method' => 'DELETE', 'route' => array('category.destroy', $category->id))) !!}
                                                            {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
                                                        {!! Form::close() !!}
                                                    </td-->
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        
                                        <tfoot>
                                            <tr>
                                                <td colspan="5">
                                                    {!! $categories !!}
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                @else
                                    There are no category for article
                                @endif


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </aside>
    @endsection 
@endsection
