@extends('system.layout.default')

@section('title', 'Table Plugins')

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
					<!-- BEGIN col-9 -->
					<div class="col-xl-9">
                        <a href="{{ route('users.create') }}" class="btn btn-primary">Create User</a>
						<!-- BEGIN #datatable -->
						<div id="datatable" class="mb-5">
							<h4>All Users Table</h4>
							<div class="card">
								<div class="card-body">
									<table id="datatableDefault" class="table w-100">
										<thead>
											<tr>
												<th>ID</th>
												<th>Name</th>
												<th>Position</th>
												<th>Office</th>
												<th>Status</th>
												<th>Age</th>
                                                <th>Actions</th>
											</tr>
										</thead>
										<tbody>
                                            @foreach($users as $user)
											<tr>
												<td>{{ $user->id }}</td>
												<td>{{ $user->name }}</td>
												<td>{{ $user->email }}</td>
												<td>{{ $user->phone }}</td>
                                                <td>{{ $user->status }}</td>
												<td>{{ $user->age }}</td>
                                                <td><a href="{{ route('users.show', $user->id) }}" class="btn w-100 btn-success" href="">View</a>
                                                    <a href="{{ route('users.edit', $user->id) }}" class="btn w-100 btn-secondary" href="">Edit</a>
                                                    <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn w-100 btn-danger">Delete</button>
                                                    </form>
                                                </td>
											</tr>
                                            @endforeach

											<tr>
												<td>2.</td>
												<td>Garrett Winters</td>
												<td>Accountant</td>
												<td>Tokyo</td>
												<td ><a class="btn  w-100 btn-success" href="">Active</a></td>
												<td>63</td>
											</tr>
											<tr>
												<td>3.</td>
												<td>Ashton Cox</td>
												<td>Junior Technical Author</td>
												<td>San Francisco</td>
												<td ><a class="btn  w-100 btn-yellow text-white" href="">Pending</a></td>
												<td>66</td>
											</tr>
											<tr>
												<td>4.</td>
												<td>Cedric Kelly</td>
												<td>Senior Javascript Developer</td>
												<td>Edinburgh</td>
												<td ><a class="btn  w-100 btn-yellow text-white" href="">Pending</a></td>
												<td>22</td>
											</tr>
											<tr>
												<td>5.</td>
												<td>Airi Satou</td>
												<td>Accountant</td>
												<td>Tokyo</td>
												<td ><a class="btn  w-100 btn-danger text-white" href="">Terminated</a></td>
												<td>33</td>
											</tr>
											<tr>
												<td>6.</td>
												<td>Brielle Williamson</td>
												<td>Integration Specialist</td>
												<td>New York</td>
												<td ><a class="btn  w-100 btn-danger text-white" href="">Terminated</a></td>
												<td>61</td>
											</tr>
											<tr>
												<td>7.</td>
												<td>Herrod Chandler</td>
												<td>Sales Assistant</td>
												<td>San Francisco</td>
												<td ><a class="btn  w-100 btn-success" href="">Active</a></td>
												<td>59</td>
											</tr>
											<tr>
												<td>8.</td>
												<td>Rhona Davidson</td>
												<td>Integration Specialist</td>
												<td>Tokyo</td>
												<td ><a class="btn  w-100 btn-success" href="">Active</a></td>
												<td>55</td>
											</tr>
											<tr>
												<td>9.</td>
												<td>Colleen Hurst</td>
												<td>Javascript Developer</td>
												<td>San Francisco</td>
												<td ><a class="btn  w-100 btn-success" href="">Active</a></td>
												<td>39</td>
											</tr>
											<tr>
												<td>10.</td>
												<td>Sonya Frost</td>
												<td>Software Engineer</td>
												<td>Edinburgh</td>
                                                <td ><a class="btn  w-100 btn-success" href="">Active</a></td>
												<td>23</td>
											</tr>
										</tbody>
									</table>
								</div>

							</div>
						</div>
						<!-- END #datatable -->
					</div>
					<!-- END col-9-->
				</div>
				<!-- END row -->
			</div>
			<!-- END col-10 -->
		</div>
		<!-- END row -->
	</div>
	<!-- END container -->
@endsection
