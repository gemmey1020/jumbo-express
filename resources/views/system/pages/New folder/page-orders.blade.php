@extends('system.layout.default')

@section('title', 'Orders')

@section('content')
	<div class="d-flex align-items-center mb-3">
		<div>
			<ul class="breadcrumb">
				<li class="breadcrumb-item"><a href="#">PAGES</a></li>
				<li class="breadcrumb-item active">ORDERS</li>
			</ul>
			<h1 class="page-header mb-0">Orders</h1>
		</div>

		<div class="ms-auto">
			<a href="#" class="btn btn-outline-theme"><i class="fa fa-plus-circle fa-fw me-1"></i> Create Orders</a>
		</div>
	</div>

	<div class="mb-md-4 mb-3 d-md-flex">
		<div class="mt-md-0 mt-2"><a href="#" class="text-inverse text-opacity-75 text-decoration-none"><i class="fa fa-download fa-fw me-1 text-theme"></i> Export</a></div>
		<div class="ms-md-4 mt-md-0 mt-2 dropdown-toggle">
			<a href="#" data-bs-toggle="dropdown" class="text-inverse text-opacity-75 text-decoration-none">More Actions</a>
			<div class="dropdown-menu">
				<a class="dropdown-item" href="#">Action</a>
				<a class="dropdown-item" href="#">Another action</a>
				<a class="dropdown-item" href="#">Something else here</a>
				<div role="separator" class="dropdown-divider"></div>
				<a class="dropdown-item" href="#">Separated link</a>
			</div>
		</div>
	</div>


				<!-- BEGIN table -->
				<div class="table-responsive">
					<table class="table table-hover text-nowrap">

					</table>
				</div>
				<!-- END table -->

				<div class="d-md-flex align-items-center">
					<div class="me-md-auto text-md-left text-center mb-2 mb-md-0">
						Showing 1 to 10 of 57 entries
					</div>
					<ul class="pagination mb-0 justify-content-center">
						<li class="page-item disabled"><a class="page-link">Previous</a></li>
						<li class="page-item"><a class="page-link" href="#">1</a></li>
						<li class="page-item active"><a class="page-link" href="#">2</a></li>
						<li class="page-item"><a class="page-link" href="#">3</a></li>
						<li class="page-item"><a class="page-link" href="#">4</a></li>
						<li class="page-item"><a class="page-link" href="#">5</a></li>
						<li class="page-item"><a class="page-link" href="#">6</a></li>
						<li class="page-item"><a class="page-link" href="#">Next</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="card-arrow">
			<div class="card-arrow-top-left"></div>
			<div class="card-arrow-top-right"></div>
			<div class="card-arrow-bottom-left"></div>
			<div class="card-arrow-bottom-right"></div>
		</div>
	</div>
@endsection
