@extends('app')

@section('content')
<div class="wrapper row-offcanvas row-offcanvas-left">

	<aside class="left-side sidebar-offcanvas" style="min-height: 1051px;">
            <section class="sidebar purplebg">
                <div class="page-sidebar  sidebar-nav">
                    <div class="nav_icons">
                        <ul class="sidebar_threeicons">
                            <li>
                                <a href="#">
                                    <i data-s="25" data-hc="#42aaca" data-color="#42aaca" data-loop="true" title="Form Builder 1" data-name="hammer" class="livicon" id="livicon-25" style="width: 25px; height: 25px;"><svg height="25" version="1.1" width="25" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative;" id="canvas-for-livicon-25"><desc>Created with Raphaël 2.1.0</desc><defs/><path style="" fill="#42aaca" stroke="none" d="M23.336,7.409C22.535999999999998,7.409,22.203,7.0169999999999995,21.874,6.574L21.273999999999997,5.773C21.273999999999997,5.773,20.915,6.133,20.471999999999998,6.5729999999999995C20.029999999999998,7.015,19.634999999999998,7.406,19.034999999999997,7.404999999999999L11.534999999999997,7.395999999999999C8.234999999999996,7.3919999999999995,6.232999999999997,9.488999999999999,6.232999999999997,9.488999999999999C5.54,3.888,9.743,1.593,12.743,1.597L19.043,1.6039999999999999C19.643,1.6049999999999998,20.087,1.956,20.509999999999998,2.3899999999999997L21.278,3.175C21.278,3.175,21.546999999999997,2.8179999999999996,21.878999999999998,2.376C22.211,1.9349999999999998,22.444,1.609,23.244999999999997,1.609L25.842999999999996,1.6139999999999999L25.836999999999996,7.414C25.836,7.413,24.276,7.41,23.336,7.409ZM13.324,30.398L18.314,30.403L18.331,8.402999999999999L13.341,8.397999999999998L13.324,30.398Z" transform="matrix(0.5524,0.5524,-0.5524,0.5524,10.5469,-4.3965)" stroke-width="0"/><path style="opacity: 0;" fill="#42aaca" stroke="none" d="M25,16V18H24V27L23,30L22,27V18H21V16H25Z" transform="matrix(0.7813,0,0,0.7813,4.2969,0)" stroke-width="0" opacity="0"/></svg></i>
                                Settings
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                    <!-- BEGIN SIDEBAR MENU -->
                    <ul class="page-sidebar-menu" id="menu">
                        <li>
                            <a href="#">
                                <i data-loop="true" data-hc="#418BCA" data-c="#418BCA" data-size="18" data-name="home" class="livicon" id="livicon-29" style="width: 18px; height: 18px;"><svg height="18" version="1.1" width="18" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative; top: -0.5px;" id="canvas-for-livicon-29"><desc>Created with Raphaël 2.1.0</desc><defs/><path style="" fill="#418bca" stroke="none" d="M29.719,15.469L24,9.751V5H21V6.752L17.414,3.167L16.424000000000003,2.1769999999999996C16.19,1.9429999999999996,15.810000000000002,1.9429999999999996,15.575000000000003,2.1769999999999996L14.585000000000003,3.167L2.282,15.469C2.048,15.703,2.048,16.083,2.282,16.317999999999998L2.847,16.883999999999997C3.081,17.116999999999997,3.461,17.118,3.6959999999999997,16.883999999999997L16,4.58L28.304000000000002,16.884C28.537000000000003,17.117,28.918000000000003,17.118000000000002,29.153000000000002,16.884L29.718000000000004,16.318C29.952,16.083,29.952,15.704,29.719,15.469ZM16,6.701L6,16.701V30H12V19.6C12,19.269000000000002,12.269,19,12.6,19H19.4C19.730999999999998,19,20,19.269,20,19.6V30H26V16.701L16,6.701ZM16,15.5L16,15.5L16,15.5L16,15.5L16,15.5ZM16,15.5L16,15.5L16,15.5L16,15.5L16,15.5ZM16,15.5L16,15.5L16,15.5L16,15.5L16,15.5ZM16,15.5L16,15.5L16,15.5L16,15.5L16,15.5Z" stroke-width="0" transform="matrix(0.5625,0,0,0.5625,0,0)"/><path style="" fill="#418bca" stroke="none" d="M18.4,20H13.599999999999998C13.267999999999997,20,12.999999999999998,20.269,12.999999999999998,20.6V30H19V20.6C19,20.269,18.731,20,18.4,20Z" transform="matrix(0.5625,0,0,0.5625,0,0)" stroke-width="0"/></svg></i>
                                <span class="title">Dashboard</span>
                            </a>

                        </li>
                        <li>
                            <a href="#">
                                <i data-loop="true" data-hc="#6CC66C" data-c="#6CC66C" data-size="18" data-name="user" class="livicon" id="livicon-40" style="width: 18px; height: 18px;"><svg height="18" version="1.1" width="18" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative;" id="canvas-for-livicon-40"><desc>Created with Raphaël 2.1.0</desc><defs/><path style="" fill="#6cc66c" stroke="none" d="M21.291,21.271C20.116,20.788,19.645,19.452,19.645,19.452S19.116,19.756,19.116,18.908C19.116,18.058,19.645,19.452,20.176,16.179000000000002C20.176,16.179000000000002,21.644,15.753000000000002,21.351999999999997,12.238000000000003H20.997999999999998C20.997999999999998,12.238000000000003,21.880999999999997,8.479000000000003,20.997999999999998,7.206000000000003C20.115999999999996,5.933000000000003,19.763999999999996,5.085000000000003,17.820999999999998,4.477000000000003C15.879999999999997,3.8700000000000028,16.587999999999997,3.991000000000003,15.174999999999997,4.053000000000003C13.762999999999998,4.1140000000000025,12.585999999999997,4.902000000000003,12.585999999999997,5.325000000000003C12.585999999999997,5.325000000000003,11.703999999999997,5.386000000000003,11.351999999999997,5.750000000000003C10.998999999999997,6.1140000000000025,10.410999999999996,7.810000000000002,10.410999999999996,8.235000000000003S10.805999999999996,11.509000000000004,11.099999999999996,12.116000000000003L10.648999999999996,12.237000000000004C10.354999999999995,15.752000000000004,11.824999999999996,16.178000000000004,11.824999999999996,16.178000000000004C12.353999999999996,19.450000000000003,12.883999999999995,18.057000000000006,12.883999999999995,18.907000000000004C12.883999999999995,19.755000000000003,12.353999999999996,19.451000000000004,12.353999999999996,19.451000000000004S11.883999999999995,20.787000000000003,10.707999999999995,21.270000000000003C9.530999999999995,21.755000000000003,3.002999999999995,24.361000000000004,2.471999999999994,24.906000000000002C1.942,25.455,2.002,28,2.002,28H29.997999999999998C29.997999999999998,28,30.058999999999997,25.455,29.526999999999997,24.906C28.996,24.361,22.468,21.756,21.291,21.271Z" stroke-width="0" transform="matrix(0.5625,0,0,0.5625,0,0)"/></svg></i>
                                <span class="title">Users</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu collapse">
                                <li>
                                    <a href="http://joshadmin.com/admin/users">
                                        <i class="fa fa-angle-double-right"></i>
                                        Users
                                    </a>
                                </li>
                                <li>
                                    <a href="http://joshadmin.com/admin/users/create">
                                        <i class="fa fa-angle-double-right"></i>
                                        Add New User
                                    </a>
                                </li>
                                <li>
                                    <a href="http://joshadmin.com/admin/users/1">
                                        <i class="fa fa-angle-double-right"></i>
                                        View Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="http://joshadmin.com/admin/deleted_users">
                                        <i class="fa fa-angle-double-right"></i>
                                        Deleted Users
                                    </a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                    <!-- END SIDEBAR MENU -->
                </div>
            </section>
        </aside>


       <aside class="right-side">

			            <!-- Notifications -->
			                        
			            <!-- Content -->
			            <section class="content-header">
			    <h1>Users</h1>
			    <ol class="breadcrumb">
			        <li>
			            <a href="index"> <i data-color="#000" data-size="16" data-name="home" class="livicon" id="livicon-46" style="width: 16px; height: 16px;"><svg height="16" version="1.1" width="16" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative; top: -0.416664px;" id="canvas-for-livicon-46"><desc>Created with Raphaël 2.1.0</desc><defs/><path style="" fill="#000000" stroke="none" d="M29.719,15.469L24,9.751V5H21V6.752L17.414,3.167L16.424000000000003,2.1769999999999996C16.19,1.9429999999999996,15.810000000000002,1.9429999999999996,15.575000000000003,2.1769999999999996L14.585000000000003,3.167L2.282,15.469C2.048,15.703,2.048,16.083,2.282,16.317999999999998L2.847,16.883999999999997C3.081,17.116999999999997,3.461,17.118,3.6959999999999997,16.883999999999997L16,4.58L28.304000000000002,16.884C28.537000000000003,17.117,28.918000000000003,17.118000000000002,29.153000000000002,16.884L29.718000000000004,16.318C29.952,16.083,29.952,15.704,29.719,15.469ZM16,6.701L6,16.701V30H12V19.6C12,19.269000000000002,12.269,19,12.6,19H19.4C19.730999999999998,19,20,19.269,20,19.6V30H26V16.701L16,6.701ZM16,15.5L16,15.5L16,15.5L16,15.5L16,15.5ZM16,15.5L16,15.5L16,15.5L16,15.5L16,15.5ZM16,15.5L16,15.5L16,15.5L16,15.5L16,15.5ZM16,15.5L16,15.5L16,15.5L16,15.5L16,15.5Z" stroke-width="0" transform="matrix(0.5,0,0,0.5,0,0)"/><path style="" fill="#000000" stroke="none" d="M18.4,20H13.599999999999998C13.267999999999997,20,12.999999999999998,20.269,12.999999999999998,20.6V30H19V20.6C19,20.269,18.731,20,18.4,20Z" transform="matrix(0.5,0,0,0.5,0,0)" stroke-width="0"/></svg></i>
			                Dashboard
			            </a>
			        </li>
			        <li>Users</li>
			        <li class="active">Users</li>
			    </ol>
			</section>

			<!-- Main content -->
			<section class="content paddingleft_right15">
			    <div class="row">
			        <div class="panel panel-primary ">
			            <div class="panel-heading">
			                <h4 class="panel-title"> <i data-hc="white" data-c="#fff" data-loop="true" data-size="16" data-name="user" class="livicon" id="livicon-47" style="width: 16px; height: 16px;"><img src=""></i>
			                    Users List
			                </h4>
			            </div>
			            <br>
			            <div class="panel-body">
			                <div id="table_wrapper" class="dataTables_wrapper no-footer"><div class="row"><div class="col-md-6 col-sm-12"><div class="dataTables_length" id="table_length"><label> <select name="table_length" aria-controls="table" class="form-control input-xsmall input-inline"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> records </label></div></div><div class="col-md-6 col-sm-12"><div id="table_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-small input-inline" aria-controls="table"></label></div></div></div><div class="table-scrollable">

			                <table id="table" class="table table-bordered  dataTable no-footer" role="grid" aria-describedby="table_info">
			                    <thead>
			                        <tr class="filters" role="row">
			                        	<th class="sorting_asc" tabindex="0" aria-controls="table" rowspan="1" colspan="1" style="width: 24px;" aria-sort="ascending" aria-label="ID: activate to sort column ascending">ID</th>
			                        	<th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" style="width: 125px;" aria-label="First Name: activate to sort column ascending">First Name</th>
			                        	<th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" style="width: 145px;" aria-label="Last Name: activate to sort column ascending">Last Name</th>
			                        	<th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" style="width: 282px;" aria-label="User E-mail: activate to sort column ascending">User E-mail</th>
			                        	<th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" style="width: 63px;" aria-label="Status: activate to sort column ascending">Status</th><th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" style="width: 95px;" aria-label="Created At: activate to sort column ascending">Created At</th>
			                        	<th class="sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1" style="width: 68px;" aria-label="Actions: activate to sort column ascending">Actions</th></tr>
			                    </thead>
			                    <tbody>
			                   
			                    <tr role="row" class="odd">
			                            <td class="sorting_1">1</td>
			                    		<td>Max2</td>
			            				<td>Power</td>
			            				<td>admin@admin.com</td>
			            				<td>
			            					            						Activated
			            					            				</td>
			            				<td>4 months ago</td>
			            				<td>
			                                <a href="http://joshadmin.com/admin/users/1"><i title="view user" data-hc="#428BCA" data-c="#428BCA" data-loop="true" data-size="18" data-name="info" class="livicon" id="livicon-48" style="width: 18px; height: 18px;"><svg height="18" version="1.1" width="18" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative; left: -0.550049px; top: -0.300003px;" id="canvas-for-livicon-48"><desc>Created with Raphaël 2.1.0</desc><defs/><path style="" fill="#428bca" stroke="none" d="M16,3C8.82,3,3,8.82,3,16S8.82,29,16,29C23.179000000000002,29,29,23.18,29,16S23.179,3,16,3ZM15.899,7.7C17.06,7.7,18,8.639,18,9.8C18,10.958,17.06,11.9,15.899000000000001,11.9S13.799000000000001,10.959,13.799000000000001,9.8C13.8,8.639,14.739,7.7,15.899,7.7ZM18.698,24.5H16.198C15.198,24.5,14.198,23.5,14.198,22.5V15.7C14.198,15.2,12.598,14.7,12.598,14.2C12.598,13.799999999999999,13.198,13.5,13.697000000000001,13.5H16.198C17.198,13.5,18.198,14.2,18.198,15.2V22.5C18.198,23,19.8,23.4,19.8,23.9C19.8,24.301,19.2,24.5,18.698,24.5Z" stroke-width="0" transform="matrix(0.5625,0,0,0.5625,0,0)"/></svg></i></a>

			                                <a href="http://joshadmin.com/admin/users/1/edit"><i title="update user" data-hc="#428BCA" data-c="#428BCA" data-loop="true" data-size="18" data-name="edit" class="livicon" id="livicon-49" style="width: 18px; height: 18px;"><svg height="18" version="1.1" width="18" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative; left: -0.550049px; top: -0.300003px;" id="canvas-for-livicon-49"><desc>Created with Raphaël 2.1.0</desc><defs/><path style="" fill="#428bca" stroke="none" d="M24,20V24H8V8H20L24,4H7C5.343,4,4,5.343,4,7V25C4,26.656,5.343,28,7,28H25C26.656,28,28,26.656,28,25V16L24,20Z" stroke-width="0" transform="matrix(0.5625,0,0,0.5625,0,0)"/><path style="" fill="#428bca" stroke="none" d="M27.105,5.369L29.651,7.914999999999999C30.114,8.380999999999998,30.118,9.143999999999998,29.651,9.610999999999999L27.671,11.591L23.429,7.347999999999999L25.409,5.3679999999999986C25.877,4.9,26.637,4.9,27.105,5.369ZM12.817,20.788C12.817,20.788,12.817,17.959,15.646,15.131L22.722,8.055L26.964000000000002,12.298L19.888,19.373C17.060000000000002,22.201,14.232000000000003,22.202,14.232000000000003,22.202S12.524000000000003,23.322000000000003,12.111000000000002,22.908C11.668,22.468,12.817,20.788,12.817,20.788ZM17.202,18.1L23.57,11.733L22.72,10.884L16.351999999999997,17.252000000000002L17.202,18.1Z" transform="matrix(0.5625,0,0,0.5625,0,0)" stroke-width="0"/></svg></i></a>
			                                
			                                
			                                
			                            </td>
			            			</tr></tbody>
			                </table>
			            </div>

			                <div class="row"><div class="col-md-5 col-sm-12"><div class="dataTables_info" id="table_info" role="status" aria-live="polite">Showing 1 to 10 of 164 entries</div></div><div class="col-md-7 col-sm-12"><div class="dataTables_paginate paging_simple_numbers" id="table_paginate"><ul class="pagination"><li class="paginate_button previous disabled" aria-controls="table" tabindex="0" id="table_previous"><a href="#"><i class="fa fa-angle-left"></i></a></li><li class="paginate_button active" aria-controls="table" tabindex="0"><a href="#">1</a></li><li class="paginate_button " aria-controls="table" tabindex="0"><a href="#">2</a></li><li class="paginate_button " aria-controls="table" tabindex="0"><a href="#">3</a></li><li class="paginate_button " aria-controls="table" tabindex="0"><a href="#">4</a></li><li class="paginate_button " aria-controls="table" tabindex="0"><a href="#">5</a></li><li class="paginate_button disabled" aria-controls="table" tabindex="0" id="table_ellipsis"><a href="#">…</a></li><li class="paginate_button " aria-controls="table" tabindex="0"><a href="#">17</a></li><li class="paginate_button next" aria-controls="table" tabindex="0" id="table_next"><a href="#"><i class="fa fa-angle-right"></i></a></li></ul></div></div></div></div>
			            </div>
			        </div>
			    </div>    <!-- row-->
			</section>
        </aside>



	<!--div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div class="panel-body">
					You are logged in!
				</div>
			</div>
		</div>
	</div-->
</div>
@endsection
