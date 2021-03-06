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
              <li class="active">Ads list</li>
          </ol>
      </section>
      <section class="content paddingleft_right15">
          <div class="row">
              <div class="col-md-12">
                  <div class="panel panel-primary">
                      <div class="panel-heading">
                          <h4 class="panel-title"> <img src="#" />Ads lists</h4>
                           <span class="pull-right clickable">
                              <i class="glyphicon glyphicon-chevron-up"></i>
                          </span>
                      </div>
                      <div class="panel-body">
                        <div class="table-responsives"> 
                          <div class="content clearfix">
                         
                          <div class="row">
                              <div class="table-responsive">
                                  @if ($ads->count())
                                      <table class="table table-bordered">
                                          <thead>
                                              <tr>
                                                  <th>Media</th>
                                                  <th>Title</th>
                                                  <th>Type</th>
                                                  <th>Link</th>
                                                  <th>Active</th>
                                                  <th colspan="2">Actions</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                              @foreach($ads as $ad)
                                                  <tr>
                                                     <td> 
                                                      
                                                      @if($ad->ad_position->type == "Image")
                                                        <img src="images/{{ $ad->image }}" width="80px" height="80px" />
                                                      @else
                                                        flash {{ $ad->image }}
                                                      @endif
                                                      </td>
                                                      <td>{{ $ad->ad_position->title }}</td>
                                                      <td>{{ $ad->ad_position->type }}</td>
                                                      <td>
                                                        {{ $ad->link }}
                                                      </td>
                                                       <td>
                                                          @if($ad->is_active)
                                                            {!! Form::checkbox('active', '1', true, array('class' => 'pos-rel p-l-30')); !!}
                                                          @else
                                                            {!! Form::checkbox('active', '1', false, array('class' => 'pos-rel p-l-30')); !!}
                                                          @endif
                                                      </td>
                                                      <td width="10">{!! link_to_route('ads.edit', 'Edit', array($ad->id), array('class' => 'btn btn-warning')) !!}</td>
                                                      <td width="10">
                                                          {!! Form::open(array('method' => 'DELETE', 'route' => array('ads.destroy', $ad->id))) !!}
                                                            {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
                                                          {!! Form::close() !!}
                                                      </td>
                                                  </tr>
                                              @endforeach
                                          </tbody>
                                          
                                          <tfoot>
                                              <tr>
                                                  <td colspan="7">
                                                      {!! $ads !!}
                                                  </td>
                                              </tr>
                                          </tfoot>
                                      </table>
                                        @else
                                            There are no events
                                        @endif

                                      </div>  
                                    </div><!-- Row finishh-->    
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
@stop
