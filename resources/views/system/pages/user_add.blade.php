@extends('system.layout.default')

@section('title', 'User')

@push('css')
  <link href="/assets/plugins/jvectormap-next/jquery-jvectormap.css" rel="stylesheet">
  <link href="/assets/css/custom.css" rel="stylesheet">
@endpush

@push('js')
	<script src="/assets/plugins/jvectormap-next/jquery-jvectormap.min.js"></script>
	<script src="/assets/plugins/jvectormap-content/world-mill.js"></script>
	<script src="/assets/plugins/apexcharts/dist/apexcharts.min.js"></script>
	<script src="/assets/js/demo/dashboard.demo.js"></script>
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
					<!-- BEGIN col-9 -->
					<div class="col-xl-9">
						<!-- BEGIN card -->
						<div class="card">
							<!-- BEGIN card body -->
							<div class="card-body">
								<h4 class="card-title mb-4">Add User Form</h4>
								<!-- BEGIN form -->
									<form>
										<div class="mb-3">
												<label for="formrow-firstname-input" class="form-label">First Name</label>
												<input type="text" class="form-control" id="formrow-firstname-input" placeholder="Enter Your First Name">
										</div>
										<div class="mb-3">
												<label for="formrow-lastname-input" class="form-label">Last Name</label>
												<input type="text" class="form-control" id="formrow-lastname-input" placeholder="Enter Your Last Name">
										</div>
										<div class="mb-3">
												<label for="formrow-phonenumber-input" class="form-label">Phone Number</label>
												<input type="text" class="form-control" id="formrow-phonenumber-input" placeholder="Enter Your Phone Number">
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="mb-3">
													<label for="formrow-email-input" class="form-label">Email</label>
													<input type="email" class="form-control" id="formrow-email-input" placeholder="Enter Your Email ID">
												</div>
											</div>
											<div class="col-md-6">
												<div class="mb-3">
													<label for="formrow-password-input" class="form-label">Password</label>
													<input type="password" class="form-control" id="formrow-password-input" placeholder="Enter Your Password">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-4">
												<div class="mb-3">
													<label for="formrow-inputCity" class="form-label">City</label>
													<input type="text" class="form-control" id="formrow-inputCity" placeholder="Enter Your Living City">
												</div>
											</div>
											<div class="col-lg-4">
												<div class="mb-3">
													<label for="formrow-inputState" class="form-label">State</label>
													<select id="formrow-inputState" class="form-select">
														<option selected="">Choose...</option>
														<option>...</option>
													</select>
												</div>
											</div>
											<div class="col-lg-4">
												<div class="mb-3">
													<label for="formrow-inputZip" class="form-label">Zip</label>
													<input type="text" class="form-control" id="formrow-inputZip" placeholder="Enter Your Zip Code">
												</div>
											</div>
										</div>
										<div>
											<button type="submit" class="btn btn-primary w-md">ADD</button>
										</div>
									</form>
								<!-- END form -->
							</div>
							<!-- END card body -->
						</div>
						<!-- END card -->
					</div>
					<!-- END col-9 -->
				</div>
					<!-- END row -->
			</div>
			<!-- END col-10 -->
		</div>
		<!-- END row -->

	</div>
	<!-- END container -->
@endsection
