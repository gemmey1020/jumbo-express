
@extends('layouts.website.master')

{{-- @section('custom_css')

@stop --}}

{{-- @section('custom_script')

@stop --}}

@section('page_content')


<main class="main__content_wrapper">

    <!-- Start breadcrumb section -->
    <section class="breadcrumb__section breadcrumb__bg">
        <div class="container">
            <div class="row row-cols-1">
                <div class="col">
                    <div class="breadcrumb__content text-center">
                        <h1 class="breadcrumb__content--title  mb-25">{{ __('termsPolicy.pagetitle') }}</h1>
                        <ul class="breadcrumb__content--menu d-flex justify-content-center">
                            <li class="breadcrumb__content--menu__items"><a class="" href="{{ url('/') }}">{{ __('termsPolicy.pagetitle2') }}</a></li>
                            <li class="breadcrumb__content--menu__items"><span class="">{{ __('termsPolicy.pagetitle') }}</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumb section -->

    <!-- Start contact section -->
    <section class="banner__section section--padding mt-5 pt-5">
        <div class="container">
            <h2 class="deals__banner--content__maintitle text-center mt-4 mb-2">{{ __('termsPolicy.sec-head') }}</h2>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <div class="testimonial__items--content mb-5">
                <p class="termsPolicy">{{ __('termsPolicy.para1') }}</p>
                <p class="termsPolicy">{{ __('termsPolicy.para2') }}</p>
                <p class="termsPolicy">{{ __('termsPolicy.para3') }}</p>
                <p class="termsPolicy">{{ __('termsPolicy.para4') }}</p>
                <button class="contact__form--btn primary__btn" type="submit">{{ __('termsPolicy.morebtn') }}</button>
            </div>
        </div>
    </div>
    <!-- End contact section -->

    <!-- Start contact map area -->
    <section class="banner__section section--padding mt-5 pt-5">
        <div class="container">
            <h2 class="deals__banner--content__maintitle text-center mt-4 mb-2">{{ __('termsPolicy.sec-head2') }}</h2>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <div class="testimonial__items--content mb-5">
                <p class="termsPolicy">{{ __('termsPolicy.para5') }}</p>
                <p class="termsPolicy">{{ __('termsPolicy.para6') }}</p>
                <p class="termsPolicy">{{ __('termsPolicy.para7') }}</p>
            </div>
        </div>
    </div>
    <!-- End contact map area -->
    <section class="banner__section section--padding mt-5 pt-5">
        <div class="container">
            <h2 class="deals__banner--content__maintitle text-center mt-4 mb-2">{{ __('termsPolicy.sec-head3') }}</h2>
        </div>
    </section>

    <div class="container mb-5">
        <div class="row">
            <div class="testimonial__items--content mb-5">
                <p class="termsPolicy">{{ __('termsPolicy.para8') }}</p>
                <p class="termsPolicy">{{ __('termsPolicy.para9') }}</p>
                <p class="termsPolicy">{{ __('termsPolicy.para10') }}</p>
            </div>
        </div>
    </div>

</main>


@endsection