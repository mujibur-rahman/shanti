<div class="row">
<div class="col-md-6 col-sm-12">
     <form action="/user/showlimit" method="POST">
    <div class="dataTables_length" id="table_length">
        <label>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            {!! Form::select('limit', array('1' => '1', '2' => '2', '40' => '40', '50' => '50'), $limit, array('class' => 'form-control', 'id' => 'limit')) !!}
        </label> records
    </div>
    </form>
</div>
<div class="col-md-6 col-sm-12">
    <div class="dataTables_filter" id="table_filter">
        <label style="float: left;">Search: </label><input aria-controls="table" class="form-control input-small input-inline" style="float: left; width: 50% !important; padding-left: 4px;" type="search"></div>
</div>
</div>