@extends('system.layout.default')


@section('title', 'Register')

@push('css')
	<link href="/assets/plugins/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet">
	<link href="/assets/plugins/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css" rel="stylesheet">
	<link href="/assets/plugins/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet">
	<link href="/assets/plugins/bootstrap-table/dist/bootstrap-table.min.css" rel="stylesheet">
@endpush

@push('js')
	<script src="/assets/plugins/@highlightjs/cdn-assets/highlight.min.js"></script>
	<script src="/assets/js/demo/highlightjs.demo.js"></script>
	<script src="/assets/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
	<script src="/assets/plugins/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
	<script src="/assets/plugins/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
	<script src="/assets/plugins/datatables.net-buttons/js/buttons.colVis.min.js"></script>
	<script src="/assets/plugins/datatables.net-buttons/js/buttons.flash.min.js"></script>
	<script src="/assets/plugins/datatables.net-buttons/js/buttons.html5.min.js"></script>
	<script src="/assets/plugins/datatables.net-buttons/js/buttons.print.min.js"></script>
	<script src="/assets/plugins/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js"></script>
	<script src="/assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
	<script src="/assets/plugins/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
	<script src="/assets/plugins/bootstrap-table/dist/bootstrap-table.min.js"></script>
	<script src="/assets/js/demo/table-plugins.demo.js"></script>
	<script src="/assets/js/demo/sidebar-scrollspy.demo.js"></script>
@endpush

@section('content')
	<!-- BEGIN container -->
	<div class="container">
		<!-- BEGIN row -->
		<div class="row justify-content-center">
			<!-- BEGIN col-10 -->
			<div class="col-xl-10">
				<!-- BEGIN row -->
				<div class="row">
					<!-- BEGIN col-12 -->
					<div class="col-xl-12">
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Roles</a></li>
							<li class="breadcrumb-item active">View Roles</li>
						</ul>

						<h1 class="page-header">
							View Roles
						</h1>

						<hr class="mb-4">

						<!-- BEGIN #datatable -->
						<div id="datatable" class="mb-5">
							<div class="card">
								<div class="card-body">
									<table id="datatableDefault" class="table  w-100">
										<thead>
											<tr>
												<th>#</th>
												<th>Name</th>
												<th>Status</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1.</td>
												<td>Super Admin</td>
                                                <td>Active</td>
												<td><button class="btn btn-outline-secondary btn-lg d-block w-100">Edit</button>
                                                    <button class="btn btn-outline-danger btn-lg d-block w-100">Delete</button>
                                                </td>
											</tr>
											<tr>
												<td>2.</td>
												<td>Garrett Winters</td>
												<td>Admin</td>
                                                <td><button class="btn btn-outline-secondary btn-lg d-block w-100">Edit</button>
                                                    <button class="btn btn-outline-danger btn-lg d-block w-100">Delete</button>
                                                </td>
											</tr>
											<tr>
												<td>3.</td>
												<td>Admin</td>
                                                <td>Active</td>
												<td><button class="btn btn-outline-secondary btn-lg d-block w-100">Edit</button>
                                                    <button class="btn btn-outline-danger btn-lg d-block w-100">Delete</button>
                                                </td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="card-arrow">
									<div class="card-arrow-top-left"></div>
									<div class="card-arrow-top-right"></div>
									<div class="card-arrow-bottom-left"></div>
									<div class="card-arrow-bottom-right"></div>
								</div>

							</div>
						</div>
						<!-- END #datatable -->

					</div>
					<!-- END col-12-->

				</div>
				<!-- END row -->
			</div>
			<!-- END col-10 -->
		</div>
		<!-- END row -->
	</div>
	<!-- END container -->
@endsection
