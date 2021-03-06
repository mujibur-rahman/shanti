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
                        <div class="table-responsives"> 
                          <div class="content clearfix">
                         
                          <div class="row">
                              <div class="table-responsive">
                                  @if ($articles->count())
                                      <table class="table table-bordered">
                                          <thead>
                                              <tr>
                                                  <th>Category</th>
                                                  <th>Title</th>
                                                  <th>Address</th>
                                                  <th colspan="4">Status</th>
                                                  <th colspan="2">Actions</th>
                                              </tr>
                                          </thead>

                                          <tbody>
                                              @foreach ($articles as $article)
                                                  <tr>
                                                      <td>{{ $article->article_category->title }}</td>
                                                      <td>{{ substr($article->title, 0, 30) }} ...</td>
                                                      <td>
                                                        {{ $article->address->location}}, {{ $article->address->thana->title }}, {{ $article->address->district->title }}, {{ $article->address->division->title }}, {{ $article->address->country->title }}
                                                      </td>
                                                      <td title="For Featured tag">
                                                        @if($article->featured)
                                                          F
                                                        @endif
                                                      </td>
                                                      <td title="Reviewing tag">
                                                        @if($article->is_reviewing)
                                                          R
                                                        @endif
                                                      </td>
                                                      <td title="For more from Dhaka">
                                                        @if($article->more_from_dhaka)
                                                          M
                                                        @endif
                                                      </td>
                                                      <td title="For Listing tag">
                                                        @if($article->list_tag)
                                                          L
                                                        @endif
                                                      </td>
                                                      <td width="10">{!! link_to_route('articles.edit', 'Edit', array($article->id), array('class' => 'btn btn-warning')) !!}</td>
                                                      <td width="10">
                                                          {!! Form::open(array('method' => 'DELETE', 'route' => array('articles.destroy', $article->id))) !!}
                                                            {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
                                                          {!! Form::close() !!}
                                                      </td>
                                                  </tr>
                                              @endforeach
                                          </tbody>
                                         
                                          <tfoot>
                                              <tr>
                                                  <td colspan="9">
                                                      {!! $articles !!}
                                                  </td>
                                              </tr>
                                          </tfoot>
                                          
                                      </table>
                                        @else
                                            There are no article
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
