@extends('layouts.website.master')

@section('custom_css')
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.3/css/dataTables.dataTables.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

@stop

@section('page_content')
<main class="main__content_wrapper">

    <!-- Start breadcrumb section -->
    <section class="breadcrumb__section breadcrumb__bg">
        <div class="container">
            <div class="row row-cols-1">
                <div class="col">
                    <div class="breadcrumb__content text-center">
                        <h1 class="breadcrumb__content--title  mb-25">{{ __('my_account.page-title') }}</h1>
                        <ul class="breadcrumb__content--menu d-flex justify-content-center">
                            <li class="breadcrumb__content--menu__items"><a class="" href="{{ url('/') }}">{{ __('my_account.page-title2') }}</a></li>
                            <li class="breadcrumb__content--menu__items"><span class="#">{{ __('my_account.page-title') }}</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumb section -->

    <!-- my account section start -->

    <!-- Start breadcrumb section -->

    <!-- End breadcrumb section -->

    <!-- my account section start -->
    <section class="my__account--section section--padding">
        <div class="container">
            <p class="account__welcome--text">{{ __('my_account.welcome') }}</p>
            <div class="my__account--section__inner border-radius-10 d-flex">
                @include('website.partials.account_panel.sidebar')
                <div class="account__wrapper">
                    <div class="account__content ">
                        <h2 class="account__content--title h3 mb-20">{{ __('my_account.orderH') }}</h2>
                        <div class="account__table--area">
                            <table id="myTable" class="account__table display">
                                {{-- <thead class="account__table--header">
                                    <tr class="account__table--header__child ">
                                        <th class="account__table--header__child--items text-center">{{ __('my_account.order') }}</th>
                                        <th class="account__table--header__child--items text-center">{{ __('my_account.date') }}</th>
                                        <th class="account__table--header__child--items">{{ __('my_account.paymentstatus') }}</th>
                                        <th class="account__table--header__child--items">{{ __('my_account.fulfillmentstatus') }}</th>
                                        <th class="account__table--header__child--items">{{ __('my_account.total') }}</th>
                                    </tr>
                                </thead>
                                <tbody class="account__table--body mobile__none">
                                    <tr class="account__table--body__child">
                                        <td class="account__table--body__child--items">#2014</td>
                                        <td class="account__table--body__child--items">February 06, 2022</td>
                                        <td class="account__table--body__child--items">{{ __('my_account.paid') }}</td>
                                        <td class="account__table--body__child--items">{{ __('my_account.unfulfilled') }}</td>
                                        <td class="account__table--body__child--items">$40.00 USD</td>
                                    </tr>
                                    <tr class="account__table--body__child">
                                        <td class="account__table--body__child--items">#2010000</td>
                                        <td class="account__table--body__child--items">February 06, 2022</td>
                                        <td class="account__table--body__child--items">{{ __('my_account.free') }}</td>
                                        <td class="account__table--body__child--items">{{ __('my_account.unfulfilled') }}</td>
                                        <td class="account__table--body__child--items">$40.00 USD</td>
                                    </tr>
                                    <tr class="account__table--body__child">
                                        <td class="account__table--body__child--items">#2010000</td>
                                        <td class="account__table--body__child--items">February 06, 2022</td>
                                        <td class="account__table--body__child--items">{{ __('my_account.free') }}</td>
                                        <td class="account__table--body__child--items">{{ __('my_account.unfulfilled') }}</td>
                                        <td class="account__table--body__child--items">$40.00 USD</td>
                                    </tr>
                                    <tr class="account__table--body__child">
                                        <td class="account__table--body__child--items">#2010000</td>
                                        <td class="account__table--body__child--items">February 06, 2022</td>
                                        <td class="account__table--body__child--items">{{ __('my_account.free') }}</td>
                                        <td class="account__table--body__child--items">{{ __('my_account.unfulfilled') }}</td>
                                        <td class="account__table--body__child--items">$40.00 USD</td>
                                    </tr>
                                    <tr class="account__table--body__child">
                                        <td class="account__table--body__child--items">#2010000</td>
                                        <td class="account__table--body__child--items">February 06, 2022</td>
                                        <td class="account__table--body__child--items">{{ __('my_account.free') }}</td>
                                        <td class="account__table--body__child--items">{{ __('my_account.unfulfilled') }}</td>
                                        <td class="account__table--body__child--items">$40.00 USD</td>
                                    </tr>
                                    <tr class="account__table--body__child">
                                        <td class="account__table--body__child--items">#2010000</td>
                                        <td class="account__table--body__child--items">February 06, 2022</td>
                                        <td class="account__table--body__child--items">{{ __('my_account.free') }}</td>
                                        <td class="account__table--body__child--items">{{ __('my_account.unfulfilled') }}</td>
                                        <td class="account__table--body__child--items">$40.00 USD</td>
                                    </tr>
                                    <tr class="account__table--body__child">
                                        <td class="account__table--body__child--items">#2010000</td>
                                        <td class="account__table--body__child--items">February 06, 2022</td>
                                        <td class="account__table--body__child--items">{{ __('my_account.free') }}</td>
                                        <td class="account__table--body__child--items">{{ __('my_account.unfulfilled') }}</td>
                                        <td class="account__table--body__child--items">$40.00 USD</td>
                                    </tr>
                                    <tr class="account__table--body__child">
                                        <td class="account__table--body__child--items">#2010000</td>
                                        <td class="account__table--body__child--items">February 06, 2022</td>
                                        <td class="account__table--body__child--items">{{ __('my_account.free') }}</td>
                                        <td class="account__table--body__child--items">{{ __('my_account.unfulfilled') }}</td>
                                        <td class="account__table--body__child--items">$40.00 USD</td>
                                    </tr>
                                    <tr class="account__table--body__child">
                                        <td class="account__table--body__child--items">#2024</td>
                                        <td class="account__table--body__child--items">February 06, 2022</td>
                                        <td class="account__table--body__child--items">{{ __('my_account.paid') }}</td>
                                        <td class="account__table--body__child--items">{{ __('my_account.fulfilled') }}</td>
                                        <td class="account__table--body__child--items">$44.00 USD</td>
                                    </tr>
                                    <tr class="account__table--body__child">
                                        <td class="account__table--body__child--items">#2164</td>
                                        <td class="account__table--body__child--items">February 06, 2022</td>
                                        <td class="account__table--body__child--items">{{ __('my_account.paid') }}</td>
                                        <td class="account__table--body__child--items">{{ __('my_account.unfulfilled') }}</td>
                                        <td class="account__table--body__child--items">$36.00 USD</td>
                                    </tr>
                                    <tr class="account__table--body__child">
                                        <td class="account__table--body__child--items">#2345</td>
                                        <td class="account__table--body__child--items">February 06, 2022</td>
                                        <td class="account__table--body__child--items">{{ __('my_account.paid') }}</td>
                                        <td class="account__table--body__child--items">{{ __('my_account.unfulfilled') }}</td>
                                        <td class="account__table--body__child--items">$87.00 USD</td>
                                    </tr>
                                    <tr class="account__table--body__child">
                                        <td class="account__table--body__child--items">#1244</td>
                                        <td class="account__table--body__child--items">February 06, 2022</td>
                                        <td class="account__table--body__child--items">{{ __('my_account.paid') }}</td>
                                        <td class="account__table--body__child--items">{{ __('my_account.fulfilled') }}</td>
                                        <td class="account__table--body__child--items">$66.00 USD</td>
                                    </tr>
                                    <tr class="account__table--body__child">
                                        <td class="account__table--body__child--items">#3455</td>
                                        <td class="account__table--body__child--items">February 06, 2022</td>
                                        <td class="account__table--body__child--items">{{ __('my_account.paid') }}</td>
                                        <td class="account__table--body__child--items">{{ __('my_account.fulfilled') }}</td>
                                        <td class="account__table--body__child--items">$55.00 USD</td>
                                    </tr>
                                    <tr class="account__table--body__child">
                                        <td class="account__table--body__child--items">#4566</td>
                                        <td class="account__table--body__child--items">February 06, 2022</td>
                                        <td class="account__table--body__child--items">{{ __('my_account.paid') }}</td>
                                        <td class="account__table--body__child--items">{{ __('my_account.unfulfilled') }}</td>
                                        <td class="account__table--body__child--items">$87.00 USD</td>
                                    </tr>
                                </tbody>
                                <tbody class="account__table--body mobile__block">
                                    <tr class="account__table--body__child">
                                        <td class="account__table--body__child--items">
                                            <strong>{{ __('my_account.order') }}</strong>
                                            <span>#2014</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>{{ __('my_account.date') }}</strong>
                                            <span>November 24, 2022</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>{{ __('my_account.paymentstatus') }}</strong>
                                            <span>{{ __('my_account.paid') }}</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>{{ __('my_account.fulfillmentstatus') }}</strong>
                                            <span>{{ __('my_account.unfulfilled') }}</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>{{ __('my_account.total') }}</strong>
                                            <span>$40.00 USD</span>
                                        </td>
                                    </tr>
                                    <tr class="account__table--body__child">
                                        <td class="account__table--body__child--items">
                                            <strong>{{ __('my_account.order') }}</strong>
                                            <span>#2014</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>{{ __('my_account.date') }}</strong>
                                            <span>November 24, 2022</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>{{ __('my_account.paymentstatus') }}</strong>
                                            <span>{{ __('my_account.paid') }}</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>{{ __('my_account.fulfillmentstatus') }}</strong>
                                            <span>{{ __('my_account.unfulfilled') }}</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>{{ __('my_account.total') }}</strong>
                                            <span>$40.00 USD</span>
                                        </td>
                                    </tr>
                                    <tr class="account__table--body__child">
                                        <td class="account__table--body__child--items">
                                            <strong>{{ __('my_account.order') }}</strong>
                                            <span>#2014</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>{{ __('my_account.date') }}</strong>
                                            <span>November 24, 2022</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>{{ __('my_account.paymentstatus') }}</strong>
                                            <span>{{ __('my_account.paid') }}</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>{{ __('my_account.fulfillmentstatus') }}</strong>
                                            <span>{{ __('my_account.unfulfilled') }}</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>{{ __('my_account.total') }}</strong>
                                            <span>$40.00 USD</span>
                                        </td>
                                    </tr>
                                    <tr class="account__table--body__child">
                                        <td class="account__table--body__child--items">
                                            <strong>{{ __('my_account.order') }}</strong>
                                            <span>#2014</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>{{ __('my_account.date') }}</strong>
                                            <span>November 24, 2022</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>{{ __('my_account.paymentstatus') }}</strong>
                                            <span>{{ __('my_account.paid') }}</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>{{ __('my_account.fulfillmentstatus') }}</strong>
                                            <span>{{ __('my_account.unfulfilled') }}</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>{{ __('my_account.total') }}</strong>
                                            <span>$40.00 USD</span>
                                        </td>
                                    </tr>
                                    <tr class="account__table--body__child">
                                        <td class="account__table--body__child--items">
                                            <strong>{{ __('my_account.order') }}</strong>
                                            <span>#2014</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>{{ __('my_account.date') }}</strong>
                                            <span>November 24, 2022</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>{{ __('my_account.paymentstatus') }}</strong>
                                            <span>{{ __('my_account.paid') }}</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>{{ __('my_account.fulfillmentstatus') }}</strong>
                                            <span>{{ __('my_account.unfulfilled') }}</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>{{ __('my_account.total') }}</strong>
                                            <span>$40.00 USD</span>
                                        </td>
                                    </tr>
                                    <tr class="account__table--body__child">
                                        <td class="account__table--body__child--items">
                                            <strong>{{ __('my_account.order') }}</strong>
                                            <span>#2014</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>{{ __('my_account.date') }}</strong>
                                            <span>November 24, 2022</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>{{ __('my_account.paymentstatus') }}</strong>
                                            <span>{{ __('my_account.paid') }}</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>{{ __('my_account.fulfillmentstatus') }}</strong>
                                            <span>{{ __('my_account.unfulfilled') }}</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>{{ __('my_account.total') }}</strong>
                                            <span>$40.00 USD</span>
                                        </td>
                                    </tr>
                                    <tr class="account__table--body__child">
                                        <td class="account__table--body__child--items">
                                            <strong>{{ __('my_account.order') }}</strong>
                                            <span>#2014</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>{{ __('my_account.date') }}</strong>
                                            <span>November 24, 2022</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>{{ __('my_account.paymentstatus') }}</strong>
                                            <span>{{ __('my_account.paid') }}</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>{{ __('my_account.fulfillmentstatus') }}</strong>
                                            <span>{{ __('my_account.unfulfilled') }}</span>
                                        </td>
                                        <td class="account__table--body__child--items">
                                            <strong>{{ __('my_account.total') }}</strong>
                                            <span>$40.00 USD</span>
                                        </td>
                                    </tr>
                                </tbody> --}}
                                <thead>
                                    <tr>
                                        <th>Tracking Number</th>
                                        <th>Sender Name</th>
                                        <th>Receiver Name</th>
                                        <th>Origin</th>
                                        <th>Destination</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($shipments as $shipment)
                                        <tr>
                                            <td>{{ $shipment->tracking_number }}</td>
                                            <td>{{ $shipment->sender_name }}</td>
                                            <td>{{ $shipment->receiver_name }}</td>
                                            <td>{{ $shipment->origin }}</td>
                                            <td>{{ $shipment->destination }}</td>
                                            <td>{{ $shipment->status }}</td>
                                            <td>
                                                <a href="{{ route('shipments.show', ['locale' => config('app.locale'),'id' => $shipment->id])}}" class="btn btn-info">View</a>
                                                <a href="{{ route('shipments.edit', ['locale' => config('app.locale'),'id' => $shipment->id])}}" class="btn btn-warning">Edit</a>
                                                <form action="{{ route('shipments.destroy', ['locale' => config('app.locale'),'id' => $shipment->id])}}" method="POST" style="display:inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- my account section end -->

    <!-- Start shipping section -->
    <!-- <section class="shipping__section2 shipping__style3 section--padding pt-0">
        <div class="container">
            <div class="shipping__section2--inner shipping__style3--inner d-flex justify-content-between">
                <div class="shipping__items2 d-flex align-items-center">
                    <div class="shipping__items2--icon">
                        <img src="{{ url('/') }}/assets/img/other/shipping1.png" alt="">
                    </div>
                    <div class="shipping__items2--content">
                        <h2 class="shipping__items2--content__title h3">{{ __('my_account.ship') }}</h2>
                        <p class="shipping__items2--content__desc">{{ __('my_account.shipPara') }}</p>
                    </div>
                </div>
                <div class="shipping__items2 d-flex align-items-center">
                    <div class="shipping__items2--icon">
                        <img src="{{ url('/') }}/assets/img/other/shipping2.png" alt="">
                    </div>
                    <div class="shipping__items2--content">
                        <h2 class="shipping__items2--content__title h3">{{ __('my_account.payment') }}</h2>
                        <p class="shipping__items2--content__desc">{{ __('my_account.shipPara') }}</p>
                    </div>
                </div>
                <div class="shipping__items2 d-flex align-items-center">
                    <div class="shipping__items2--icon">
                        <img src="{{ url('/') }}/assets/img/other/shipping3.png" alt="">
                    </div>
                    <div class="shipping__items2--content">
                        <h2 class="shipping__items2--content__title h3">{{ __('my_account.return') }}</h2>
                        <p class="shipping__items2--content__desc">{{ __('my_account.shipPara') }}</p>
                    </div>
                </div>
                <div class="shipping__items2 d-flex align-items-center">
                    <div class="shipping__items2--icon">
                        <img src="{{ url('/') }}/assets/img/other/shipping4.png" alt="">
                    </div>
                    <div class="shipping__items2--content">
                        <h2 class="shipping__items2--content__title h3">{{ __('my_account.support') }}</h2>
                        <p class="shipping__items2--content__desc">{{ __('my_account.shipPara') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- End shipping section -->

</main>
    <!-- my account section end -->

</main>
@endsection

@section('custom_script')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/2.0.3/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
</script>
@stop
