@extends('system.layout.default')

@section('title', 'User')

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
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js">
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
                            <div class="col-12">
                            <div id="datatable" class="mb-5">
							<h4>Edit User</h4>
							<div class="card">
								<div class="card-body">
									<table id="datatableDefault" class="table w-100">
										<thead>
                                                    <tr style="cursor: pointer;">
                                                        <th>ID</th>
                                                        <th>Name</th>
                                                        <th>Age</th>
                                                        <th>Gender</th>
                                                        <th>Edit</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr data-id="1" style="cursor: pointer;">
                                                        <td data-field="id" style="width: 80px">1</td>
                                                        <td data-field="name" style="width: 229px;">David McHenry</td>
                                                        <td data-field="age" style="width: 94.625px;">24</td>
                                                        <td data-field="gender" style="width: 72.6875px;">Female</td>
                                                        <td style="width: 100px">
                                                            <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                                <i class="fas fa-pencil-alt" title="Edit"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr data-id="2" style="cursor: pointer;">
                                                        <td data-field="id">2</td>
                                                        <td data-field="name">Frank Kirk</td>
                                                        <td data-field="age">22</td>
                                                        <td data-field="gender">Male</td>
                                                        <td>
                                                            <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                                <i class="fas fa-pencil-alt"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr data-id="3" style="cursor: pointer;">
                                                        <td data-field="id">3</td>
                                                        <td data-field="name">Rafael Morales</td>
                                                        <td data-field="age">26</td>
                                                        <td data-field="gender">Male</td>
                                                        <td>
                                                            <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                                <i class="fas fa-pencil-alt"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr data-id="4" style="cursor: pointer;">
                                                        <td data-field="id">4</td>
                                                        <td data-field="name">Mark Ellison</td>
                                                        <td data-field="age">32</td>
                                                        <td data-field="gender">Male</td>
                                                        <td>
                                                            <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                                <i class="fas fa-pencil-alt"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr data-id="5" style="cursor: pointer;">
                                                        <td data-field="id">5</td>
                                                        <td data-field="name">Minnie Walter</td>
                                                        <td data-field="age">27</td>
                                                        <td data-field="gender">Female</td>
                                                        <td>
                                                            <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                                <i class="fas fa-pencil-alt"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                </table>
                                        </div>

                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
					<!-- END row -->
			</div>
			<!-- END col-10 -->
		</div>
		<!-- END row -->

	</div>
	<!-- END container -->

@endsection
@section('custom_script')
{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/2.0.3/js/dataTables.js"></script>
 --}}
@stop
