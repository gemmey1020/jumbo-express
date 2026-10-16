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
							<li class="breadcrumb-item"><a href="#">Orders</a></li>
							<li class="breadcrumb-item active">View All Orders</li>
						</ul>

						<h1 class="page-header">
							View All Orders
						</h1>

						<hr class="mb-4">

						<!-- BEGIN #datatable -->
						<div id="datatable" class="mb-5">
							<div class="card">
								<div class="card-body">
									<table id="datatableDefault" class="table  w-100">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0 pt-0 pb-2"></th>
                                                <th class="border-top-0 pt-0 pb-2">Order</th>
                                                <th class="border-top-0 pt-0 pb-2">Date</th>
                                                <th class="border-top-0 pt-0 pb-2">Customer</th>
                                                <th class="border-top-0 pt-0 pb-2">Total</th>
                                                <th class="border-top-0 pt-0 pb-2">Payment status</th>
                                                <th class="border-top-0 pt-0 pb-2">Fulfillment status</th>
                                                <th class="border-top-0 pt-0 pb-2">Items</th>
                                                <th class="border-top-0 pt-0 pb-2">Delivery method</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="w-10px align-middle">
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="product1">
                                                        <label class="form-check-label" for="product1"></label>
                                                    </div>
                                                </td>
                                                <td class="align-middle"><a href="/page/order/details">#1950</a></td>
                                                <td class="align-middle">Thu 26 Nov, 12:23pm</td>
                                                <td class="align-middle">Amanda Lee</td>
                                                <td>$398.00</td>
                                                <td class="py-1 align-middle"><span class="badge border border-success text-success px-2 pt-5px pb-5px rounded fs-12px d-inline-flex align-items-center"><i class="fa fa-circle fs-9px fa-fw me-5px"></i> Paid</span></td>
                                                <td class="align-middle"><span class="badge border border-success text-success px-2 pt-5px pb-5px rounded fs-12px d-inline-flex align-items-center"><i class="fa fa-circle fs-9px fa-fw me-5px"></i> Fulfilled</span></td>
                                                <td class="align-middle">3 items</td>
                                                <td class="align-middle">Free shipping</td>
                                            </tr>
                                            <tr>
                                                <td class="w-10px align-middle">
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="product2">
                                                        <label class="form-check-label" for="product2"></label>
                                                    </div>
                                                </td>
                                                <td class="align-middle"><a href="/page/order/details">#1949</a></td>
                                                <td class="align-middle">Thu 26 Nov, 11:54am</td>
                                                <td class="align-middle">Leonard Oii</td>
                                                <td>$496.00</td>
                                                <td class="py-1 align-middle"><span class="badge border border-success text-success px-2 pt-5px pb-5px rounded fs-12px d-inline-flex align-items-center"><i class="fa fa-circle fs-9px fa-fw me-5px"></i> Paid</span></td>
                                                <td class="align-middle"><span class="badge border border-success text-success px-2 pt-5px pb-5px rounded fs-12px d-inline-flex align-items-center"><i class="fa fa-circle fs-9px fa-fw me-5px"></i> Fulfilled</span></td>
                                                <td class="align-middle">1 item</td>
                                                <td class="align-middle">Local pickup</td>
                                            </tr>
                                            <tr>
                                                <td class="w-10px align-middle">
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="product3">
                                                        <label class="form-check-label" for="product3"></label>
                                                    </div>
                                                </td>
                                                <td class="align-middle"><a href="/page/order/details">#1948</a></td>
                                                <td class="align-middle">Thu 25 Nov, 11:54pm</td>
                                                <td class="align-middle">John Doe</td>
                                                <td>$195.00</td>
                                                <td class="py-1 align-middle"><span class="badge border border-warning text-warning px-2 pt-5px pb-5px rounded fs-12px d-inline-flex align-items-center"><i class="fa fa-circle fs-9px fa-fw me-5px"></i> Pending</span></td>
                                                <td class="align-middle"><span class="badge border border-warning text-warning px-2 pt-5px pb-5px rounded fs-12px d-inline-flex align-items-center"><i class="fa fa-circle fs-9px fa-fw me-5px"></i> Unfulfilled</span></td>
                                                <td class="align-middle">2 items</td>
                                                <td class="align-middle">Express</td>
                                            </tr>
                                            <tr>
                                                <td class="w-10px align-middle">
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="product4">
                                                        <label class="form-check-label" for="product4"></label>
                                                    </div>
                                                </td>
                                                <td class="align-middle"><a href="/page/order/details">#1947</a></td>
                                                <td class="align-middle">Thu 25 Nov, 11:53pm</td>
                                                <td class="align-middle">Terry Ng</td>
                                                <td>$195.00</td>
                                                <td class="py-1 align-middle"><span class="badge border border-warning text-warning px-2 pt-5px pb-5px rounded fs-12px d-inline-flex align-items-center"><i class="fa fa-circle fs-9px fa-fw me-5px"></i> Pending</span></td>
                                                <td class="align-middle"><span class="badge border border-warning text-warning px-2 pt-5px pb-5px rounded fs-12px d-inline-flex align-items-center"><i class="fa fa-circle fs-9px fa-fw me-5px"></i> Unfulfilled</span></td>
                                                <td class="align-middle">2 items</td>
                                                <td class="align-middle">Express</td>
                                            </tr>
                                            <tr>
                                                <td class="w-10px align-middle">
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="product5">
                                                        <label class="form-check-label" for="product5"></label>
                                                    </div>
                                                </td>
                                                <td class="align-middle"><a href="/page/order/details">#1946</a></td>
                                                <td class="align-middle">Thu 25 Nov, 11:52pm</td>
                                                <td class="align-middle">Terry Ng</td>
                                                <td>$195.00</td>
                                                <td class="py-1 align-middle"><span class="badge border border-warning text-warning px-2 pt-5px pb-5px rounded fs-12px d-inline-flex align-items-center"><i class="fa fa-circle fs-9px fa-fw me-5px"></i> Pending</span></td>
                                                <td class="align-middle"><span class="badge border border-yellow text-warning px-2 pt-5px pb-5px rounded fs-12px d-inline-flex align-items-center"><i class="fa fa-circle fs-9px fa-fw me-5px"></i> Unfulfilled</span></td>
                                                <td class="align-middle">2 items</td>
                                                <td class="align-middle">Express</td>
                                            </tr>
                                            <tr>
                                                <td class="w-10px align-middle">
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="product6">
                                                        <label class="form-check-label" for="product6"></label>
                                                    </div>
                                                </td>
                                                <td class="align-middle"><a href="/page/order/details">#1945</a></td>
                                                <td class="align-middle">Thu 24 Nov, 2:43pm</td>
                                                <td class="align-middle">Lelouch Wong</td>
                                                <td>$900.00</td>
                                                <td class="py-1 align-middle"><span class="badge border border-success text-success px-2 pt-5px pb-5px rounded fs-12px d-inline-flex align-items-center"><i class="fa fa-circle fs-9px fa-fw me-5px"></i> Paid</span></td>
                                                <td class="align-middle"><span class="badge border border-primary text-primary px-2 pt-5px pb-5px rounded fs-12px d-inline-flex align-items-center"><i class="fa fa-circle fs-9px fa-fw me-5px"></i> Ready for pickup</span></td>
                                                <td class="align-middle">2 items</td>
                                                <td class="align-middle">Local pickup</td>
                                            </tr>
                                            <tr>
                                                <td class="w-10px align-middle">
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="product7">
                                                        <label class="form-check-label" for="product7"></label>
                                                    </div>
                                                </td>
                                                <td class="align-middle"><a href="/page/order/details">#1944</a></td>
                                                <td class="align-middle">Thu 23 Nov, 2:43pm</td>
                                                <td class="align-middle">Cynthia Ting</td>
                                                <td>$625.00</td>
                                                <td class="py-1 align-middle"><span class="badge border border-success text-success px-2 pt-5px pb-5px rounded fs-12px d-inline-flex align-items-center"><i class="fa fa-circle fs-9px fa-fw me-5px"></i> Paid</span></td>
                                                <td class="align-middle"><span class="badge border border-primary text-primary px-2 pt-5px pb-5px rounded fs-12px d-inline-flex align-items-center"><i class="fa fa-circle fs-9px fa-fw me-5px"></i> Ready for delivery</span></td>
                                                <td class="align-middle">1 item</td>
                                                <td class="align-middle">Local pickup</td>
                                            </tr>
                                            <tr>
                                                <td class="w-10px align-middle">
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="product8">
                                                        <label class="form-check-label" for="product8"></label>
                                                    </div>
                                                </td>
                                                <td class="align-middle"><a href="/page/order/details">#1943</a></td>
                                                <td class="align-middle">Thu 23 Nov, 11:59am</td>
                                                <td class="align-middle">Richard Leong</td>
                                                <td>$195.00</td>
                                                <td class="py-1 align-middle"><span class="badge border border-gray-300 text-gray-300 px-2 pt-5px pb-5px rounded fs-12px d-inline-flex align-items-center"><i class="fa fa-circle fs-9px fa-fw me-5px"></i> Partially refunded</span></td>
                                                <td class="align-middle"><span class="badge border border-danger text-danger px-2 pt-5px pb-5px rounded fs-12px d-inline-flex align-items-center"><i class="fa fa-circle fs-9px fa-fw me-5px"></i> Partially fulfilled</span></td>
                                                <td class="align-middle">2 items</td>
                                                <td class="align-middle">Express</td>
                                            </tr>
                                            <tr>
                                                <td class="w-10px align-middle">
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="product9">
                                                        <label class="form-check-label" for="product9"></label>
                                                    </div>
                                                </td>
                                                <td class="align-middle"><a href="/page/order/details">#1942</a></td>
                                                <td class="align-middle">Thu 22 Nov, 8:12am</td>
                                                <td class="align-middle">Clement Tang</td>
                                                <td>$195.00</td>
                                                <td class="py-1 align-middle"><span class="badge border border-success text-success px-2 pt-5px pb-5px rounded fs-12px d-inline-flex align-items-center"><i class="fa fa-circle fs-9px fa-fw me-5px"></i> Paid</span></td>
                                                <td class="align-middle"><span class="badge border border-success text-success px-2 pt-5px pb-5px rounded fs-12px d-inline-flex align-items-center"><i class="fa fa-circle fs-9px fa-fw me-5px"></i> Fulfilled</span></td>
                                                <td class="align-middle">1 item</td>
                                                <td class="align-middle">Express</td>
                                            </tr>
                                            <tr>
                                                <td class="w-10px align-middle">
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="product10">
                                                        <label class="form-check-label" for="product10"></label>
                                                    </div>
                                                </td>
                                                <td class="align-middle"><a href="/page/order/details">#1941</a></td>
                                                <td class="align-middle">Thu 22 Nov, 7:42am</td>
                                                <td class="align-middle">Richard Leong</td>
                                                <td>$195.00</td>
                                                <td class="py-1 align-middle"><span class="badge border border-success text-success px-2 pt-5px pb-5px rounded fs-12px d-inline-flex align-items-center"><i class="fa fa-circle fs-9px fa-fw me-5px"></i> Paid</span></td>
                                                <td class="align-middle"><span class="badge border border-success text-success px-2 pt-5px pb-5px rounded fs-12px d-inline-flex align-items-center"><i class="fa fa-circle fs-9px fa-fw me-5px"></i> Fulfilled</span></td>
                                                <td class="align-middle">1 item</td>
                                                <td class="align-middle">Express</td>
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
