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
                <li>Tag</li>
                <li class="active">Tags list</li>
            </ol>
        </section>
        <section class="content paddingleft_right15">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary"> <!-- app.css panel-default-->
                    <div class="panel-heading">
                    <h4 class="panel-title">
                        Tags lists
                    </h4>
                </div>
                        <div class="panel-body">
                           <div class="dataTables_wrapper no-footer" id="table_wrapper">
                            <div class="table-responsive"> 

                                @if ($tags->count())
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Bengali</th>
                                                <th colspan="3">Actions</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($tags as $tag)
                                                <tr>
                                                    <td>{{ $tag->tag }}</td>
                                                    <td>{{ $tag->tagBengali }}</td>
                                                   
                                                    <td width="10">{!! link_to_route('tags.edit', 'Edit', array($tag->id), array('class' => 'btn btn-warning')) !!}</td>
                                                    
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        
                                        <tfoot>
                                            <tr>
                                                <td colspan="5">
                                                    {!! $tags !!}
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                @else
                                    There are no tags
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