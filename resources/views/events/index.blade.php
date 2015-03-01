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
              <li class="active">Events list</li>
          </ol>
      </section>
      <section class="content paddingleft_right15">
          <div class="row">
              <div class="col-md-12">
                  <div class="panel panel-primary">
                      <div class="panel-heading">
                          <h4 class="panel-title"> <img src="#" />Event lists</h4>
                           <span class="pull-right clickable">
                              <i class="glyphicon glyphicon-chevron-up"></i>
                          </span>
                      </div>
                      <div class="panel-body">
                        <div class="table-responsives"> 
                          <div class="content clearfix">
                         
                          <div class="row">
                              <div class="table-responsive">
                                  @if ($events->count())
                                      <table class="table table-bordered">
                                          <thead>
                                              <tr>
                                                  <th>Category</th>
                                                  <th>Title</th>
                                                  <th>Address</th>
                                                  <th colspan="2">Actions</th>
                                              </tr>
                                          </thead>

                                          <tbody>
                                              @foreach ($events as $event)
                                                  <tr>
                                                      <td>{{ $event->article_category->title }}</td>
                                                      <td>{{ substr($event->title, 0, 30) }} ...</td>
                                                      <td>
                                                        {{ $event->address->location}}, {{ $event->address->thana->title }}, {{ $event->address->district->title }}, {{ $event->address->division->title }}, {{ $event->address->country->title }}
                                                      </td>
                                                      <td width="10">{!! link_to_route('events.edit', 'Edit', array($event->id), array('class' => 'btn btn-warning')) !!}</td>
                                                      <td width="10">
                                                          {!! Form::open(array('method' => 'DELETE', 'route' => array('events.destroy', $event->id))) !!}
                                                            {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
                                                          {!! Form::close() !!}
                                                      </td>
                                                  </tr>
                                              @endforeach
                                          </tbody>
                                          @if ($events->count() > 10)
                                          <tfoot>
                                              <tr>
                                                  <td colspan="5">
                                                      {!! $events !!}
                                                  </td>
                                              </tr>
                                          </tfoot>
                                          @endif
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

  <script>
    
    $(function() {

      // Traitement du vu
      $(document).on('change', ':checkbox[name="seen"]', function() {
        $(this).parents('tr').toggleClass('warning');
        $(this).hide().parent().append('<i class="fa fa-refresh fa-spin"></i>');
        var token = $('input[name="_token"]').val();
        $.ajax({
          url: 'postseen/' + this.value,
          type: 'PUT',
          data: "seen=" + this.checked + "&_token=" + token
        })
        .done(function() {
          $('.fa-spin').remove();
          $('input:checkbox[name="seen"]:hidden').show();
        })
        .fail(function() {
          $('.fa-spin').remove();
          chk = $('input:checkbox[name="seen"]:hidden');
          chk.show().prop('checked', chk.is(':checked') ? null:'checked').parents('tr').toggleClass('warning');
          alert('{{ trans('back/blog.fail') }}');
        });
      });

      // Traitement du actif
      $(document).on('change', ':checkbox[name="active"]', function() {
        $(this).hide().parent().append('<i class="fa fa-refresh fa-spin"></i>');
        var token = $('input[name="_token"]').val();
        $.ajax({
          url: 'postactive/' + this.value,
          type: 'PUT',
          data: "active=" + this.checked + "&_token=" + token
        })
        .done(function() {
          $('.fa-spin').remove();
          $('input:checkbox[name="active"]:hidden').show();
        })
        .fail(function() {
          $('.fa-spin').remove();
          chk = $('input:checkbox[name="active"]:hidden');
          chk.show().prop('checked', chk.is(':checked') ? null:'checked').parents('tr').toggleClass('warning');
          alert('{{ trans('back/blog.fail') }}');
        });
      });

      // Traitement du tri
      $('a.order').click(function(e) {
        e.preventDefault();
        // Sens actuel du tri
        var sens;
        if($('span', this).hasClass('fa-unsorted')) sens = 'aucun';
        else if ($('span', this).hasClass('fa-sort-desc')) sens = 'desc';
        else if ($('span', this).hasClass('fa-sort-asc')) sens = 'asc';
        // Remise à zéro de l'ensemble
        $('a.order span').removeClass().addClass('fa fa-fw fa-unsorted');
        // Ajustement du sélectionné
        $('span', this).removeClass();
        var tri;
        if(sens == 'aucun' || sens == 'asc') {
          $('span', this).addClass('fa fa-fw fa-sort-desc');
          tri = 'desc';
        } else if(sens == 'desc') {
          $('span', this).addClass('fa fa-fw fa-sort-asc');
          tri = 'asc';
        }
        // Icone d'attente
        $('.breadcrumb li').append('<span id="tempo" class="fa fa-refresh fa-spin"></span>');       
        // Envoi ajax
        $.ajax({
          url: 'blog/order',
          type: 'GET',
          dataType: 'json',
          data: "name=" + $(this).attr('name') + "&sens=" + tri
        })
        .done(function(data) {
          $('tbody').html(data.view);
          $('.link').html(data.links);
          $('#tempo').remove();
        })
        .fail(function() {
          alert('{{ trans('back/blog.fail') }}');
        });
      })

    });

  </script>

@stop
