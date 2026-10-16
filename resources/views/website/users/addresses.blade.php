@extends('layouts.website.master')

@section('custom_css')
{{-- <link rel="stylesheet" href="https://cdn.datatables.net/2.0.3/css/dataTables.dataTables.css" />
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/2.0.7/css/dataTables.dataTables.min.css"> --}}
@stop



@section('page_content')


<main class="main__content_wrapper">

    <!-- Start breadcrumb section -->
    <section class="breadcrumb__section breadcrumb__bg">
        <div class="container">
            <div class="row row-cols-1">
                <div class="col">
                    <div class="breadcrumb__content text-center">
                        <h1 class="breadcrumb__content--title mb-25">{{ __('addresses.page-title') }}</h1>
                        <ul class="breadcrumb__content--menu d-flex justify-content-center">
                            <li class="breadcrumb__content--menu__items"><a class="" href="{{ url('/') }}">{{ __('addresses.page-title2') }}</a></li>
                            <li class="breadcrumb__content--menu__items"><span class="">{{ __('addresses.page-title') }}</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumb section -->

    <!-- my account section start -->
    <section class="my__account--section section--padding">
        <div class="container">
            <div class="my__account--section__inner border-radius-10 d-flex">
                @include('website.partials.account_panel.sidebar')
                <div class="account__wrapper">
                    <div class="account__content">
                        <h3 class="account__content--title mb-20">{{ __('addresses.addresses') }}</h3>
                        <button class="new__address--btn primary__btn mb-25" id="main_button_4_modal" data-open="addNewAddressModal" type="button">{{ __('addresses.newaddress') }}</button>

                        <div class="account__details two">
                            <h4 class="account__details--title">{{ __('addresses.default') }}</h4>
                            <p class="account__details--desc">
                                {{ $main_address->country ?? '' }} -
                                {{ $main_address->city ?? '' }}  -

                                {{ $main_address->street_address ?? '' }} <br>



                            </p>
                            {{-- //// --}}

                            <div class="accordion__container">
                                <div class="accordion__items">
                                <h2 class="accordion__items--title">
                                        <button class="faq__accordion--btn accordion__items--button">{{ __('addresses.viewaddresses') }}( {{ count($user_addresses) }})
                                            <svg class="accordion__items--button__icon" xmlns="http://www.w3.org/2000/svg" width="20.355" height="13.394" viewBox="0 0 512 512"><path d="M98 190.06l139.78 163.12a24 24 0 0036.44 0L414 190.06c13.34-15.57 2.28-39.62-18.22-39.62h-279.6c-20.5 0-31.56 24.05-18.18 39.62z" fill="currentColor"/></svg>
                                        </button>
                                    </h2>
                                    <div class="accordion__items--body">
                                        @foreach ($user_addresses as $single_address)

                                        <p class="accordion__items--body__desc">{{ $single_address->city }} -- {{ $single_address->state }} -- {{ $single_address->street_address }} -- {{ $single_address->country }} </p>
                                        <div class="account__details--footer d-flex">
                                            {{-- <a class="account__details--footer__btn" data-open="modal1" href="{{ route('addresses.get_edit',[config('app.locale'),  $single_address->id]) }}">{{ __('addresses.editbtn') }}</a> --}}

                                            <button class="account__details--footer__btn" data-open="editAddressModal" type="button" id="modal_internal_click" style="display: none"></button>

                                            <a class="account__details--footer__btn" id="edit_address_ajax_btn"  data-open="modal1"  href="javascript:get_edit_Address({{ $single_address->id }})"> {{ __('addresses.editbtn') }} </a>


                                            <a class="account__details--footer__btn" href="{{ route('addresses.delete' ,  ['locale' => config('app.locale'),'id' => $single_address->id ])}}" >{{ __('addresses.deletebtn') }}</a>
                                        </div>
                                        <hr>
                                        @endforeach

                                    </div>
                                </div>
                            </div>



                            {{-- / --}}

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- my account section end -->
<div class="modal_viwe" id ="model_to_append">

    @include('website.partials.account_panel.address_modal')
</div>

    <!-- Start shipping section -->

    <!-- End shipping section -->
    <div class="modal" id="addNewAddressModal" data-animation="slideInUp">
        <div class="modal-dialog quickview__main--wrapper">
            <header class="modal-header quickview__header">
                <button class="close-modal quickview__close--btn" aria-label="close modal" data-close>✕ </button>
            </header>
            @include('website.partials.account_panel.add_new_address_modal')



</div>
</div>
<div class="modal" id="editAddressModal" data-animation="slideInUp">
    <div class="modal-dialog quickview__main--wrapper">
        <header class="modal-header quickview__header">
            <button class="close-modal quickview__close--btn" aria-label="close modal" data-close>✕ </button>
        </header>
    <div id="form_append">


    </div>


</div>
</div>



</main>


@endsection
@section('custom_script')
{{--

<script src="https://cdn.datatables.net/2.0.3/js/dataTables.js"></script>
<script>
    let table = new DataTable('#myTable');
</script> --}}

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
 function get_edit_Address(address_id)
 {
    let ajax_url = "{{ url('/') }}/locales/addresses/address_id";
    ajax_url = ajax_url.replace('address_id', address_id);
    ajax_url = ajax_url.replace('locales', "{{ config('app.locale') }}");
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': '{{ csrf_field() }}',
    }
    });
    $.ajax({
            method: "GET",
            url: ajax_url,

            success: (result) => {
                // console.log(result);
                $('#form_append').html(result.html);
                alert('Success , edit address is working but it is not now due security issues on Deployment');

                console.log(result);
                $("#modal_internal_click").click();
                // $('#addressModal').on('hidden', function () {
                //     $('input').val('');
                // });


                // $('#addressModal').modal('toggle');






                // $("#comment-errors-data").html('');
                // $("#comment-input").val('');
                // $("#successMessage").removeClass('visually-hidden');
                // getCommentsOfPosts(post_id);
            },
            // error: (error) => {
            //     // if(error.status === 422) { // "Unprocessable Entity" - Form data invalid
            //     //     $("#successMessage").addClass('visually-hidden');
            //     //     var message = error.responseJSON.errors ? error.responseJSON.errors.comment ?  error.responseJSON.errors.comment[0] : '' : '';
            //     //     $("#comment-errors-data").html(message);
            //     //     submitButton.html('Save');
            //     }

    });
 }
 function delete_address(address_id) {
    alert('Success , delete address is working but it is not now due security issues on Deployment');

 }
</script>
@stop
