@extends('layouts.website.master')

@section('custom_css')
{{-- <link rel="stylesheet" href="https://cdn.datatables.net/2.0.3/css/dataTables.dataTables.css" />
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/2.0.7/css/dataTables.dataTables.min.css"> --}}

@stop

@section('page_content')
<section class="my__account--section section--padding">
    <div class="container">
        <div class="my__account--section__inner border-radius-10 d-flex">
            @include('website.partials.account_panel.sidebar')
            <div class="account__wrapper">
                <div class="account__content">
                    <div class="product-form">
                        <h2>Shipment Request Form</h2>
                        <form id="shipmentRequestForm" action="{{ route('shipments.create', config('app.locale')) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">

                            <label for="shipment_name">Shipment Name / Title</label>
                            <input type="text" id="shipment_name" name="shipment_name" required>

                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" name="mobile" required>

                            <label for="origin_address">Origin Address</label>
                            <input type="text" id="origin_address" name="origin_address" required>

                            <label for="destination_address">Destination Address</label>
                            <input type="text" id="destination_address" name="destination_address" required>

                            <label for="shipmentWeight">Shipment Weight (in kg)</label>
                            <input type="number" id="shipmentWeight" name="shipmentWeight" step="0.01" required>

                            <label for="cost">Cost</label>
                            <input type="number" id="cost" name="cost" step="0.01" required>

                            <label for="tracking_number">Tracking Number</label>
                            <input type="text" id="tracking_number" name="tracking_number" required>

                            <label for="imageInput">Upload Image</label>
                            <input type="file" id="imageInput" name="image" accept="image/*" required>

                            <label for="additionalInfo">Additional Information</label>
                            <textarea id="additionalInfo" name="additionalInfo" rows="4"></textarea>

                            <button type="submit" class="button">Request Shipment</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>





@endsection
@section('custom_script')
{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/2.0.3/js/dataTables.js"></script>
<script>
    let table = new DataTable('#myTable');
</script> --}}
@stop
