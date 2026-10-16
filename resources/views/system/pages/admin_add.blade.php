@extends('system.layout.default')


@section('title', 'Register')

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
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Admins</a></li>
							<li class="breadcrumb-item active">Add Admin</li>
						</ul>

						<h1 class="page-header">
							Add new admin
						</h1>

						<hr class="mb-4">

    <!-- BEGIN register-content -->
        <form action="/" method="POST" name="register_form">
           <div class="mb-3">
                <label class="form-label">Name <span class="text-danger">*</span></label>
                <input type="text" class="form-control form-control-lg bg-inverse bg-opacity-5" placeholder="e.g John Smith" value="">
            </div>
            <div class="mb-3">
                <label class="form-label">Email Address <span class="text-danger">*</span></label>
                <input type="email" class="form-control form-control-lg bg-inverse bg-opacity-5" placeholder="contact@example.invalid" value="">
            </div>
            <div class="mb-3">
                <label class="form-label">Password <span class="text-danger">*</span></label>
                <input type="password" class="form-control form-control-lg bg-inverse bg-opacity-5" value="">
            </div>
            <div class="mb-3">
                <label class="form-label">Confirm Password <span class="text-danger">*</span></label>
                <input type="password" class="form-control form-control-lg bg-inverse bg-opacity-5" value="">
            </div>
            <div class="mb-3">
                <label class="form-label">Phone<span class="text-danger">*</span></label>
                <input type="tel" class="form-control form-control-lg bg-inverse bg-opacity-5" value="">
            </div>
            <div class="mb-3">
                <label class="form-label">Role <span class="text-danger">*</span></label>
                <select class="form-select form-select-lg bg-inverse bg-opacity-5">
                    <option>Super admin</option>
                    <option>Admin</option>
                </select>
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-outline-theme btn-lg d-block w-100">Create</button>
            </div>
        </form>
    <!-- END register-content -->
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
