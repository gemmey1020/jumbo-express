
@extends('layouts.website.master')

{{-- @section('custom_css')

@stop --}}

{{-- @section('custom_script')

@stop --}}

@section('page_content')



<main class="main__content_wrapper">

    <!-- Start breadcrumb section -->
    <section class="breadcrumb__section forbusiness__bg">
        <div class="container">
            <div class="row row-cols-1">
                <div class="col">
                    <div class="breadcrumb__content text-center">
                        <h1 class="breadcrumb__content--title  mb-25">{{ __('forbusiness.pagetitle') }}</h1>
                        <ul class="breadcrumb__content--menu d-flex justify-content-center">
                            <li class="breadcrumb__content--menu__items"><a class="" href="{{ url('/') }}">{{ __('forbusiness.pagetitle2') }}</a></li>
                            <li class="breadcrumb__content--menu__items"><span class="">{{ __('forbusiness.pagetitle') }}</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumb section -->

    <!-- Start contact section -->
    <section class="about__section section--padding mb-95">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about__content">
                        <span class="about__content--maintitle text__secondary mb-20">{{ __('forbusiness.content-h1') }}</span>
                        <h2 class="about__content--subtitle mb-25">{{ __('forbusiness.content-h2') }}</h2>
                        <p class="about__content--desc mb-20">{{ __('forbusiness.content-p1') }}</p>
                        <a class="primary__btn mb-3" href="#">{{ __('forbusiness.startbtn') }}
                            <svg class="primary__btn--arrow__icon" xmlns="http://www.w3.org/2000/svg" width="20.2" height="12.2" viewBox="0 0 6.2 6.2">
                                <path d="M7.1,4l-.546.546L8.716,6.713H4v.775H8.716L6.554,9.654,7.1,10.2,9.233,8.067,10.2,7.1Z" transform="translate(-4 -4)" fill="currentColor"></path>
                            </svg>
                        </a>
                        <p class="about__content--desc">{{ __('forbusiness.content-login1') }}</p>
                        <p class="account__login--signup__text">{{ __('forbusiness.content-login2') }}<button type="submit">{{ __('forbusiness.content-login3') }}</button></p>
                        <!-- <p class="about__content--desc mb-25">{{ __('forbusiness.content-p2') }}</p> -->
                        <!-- <div class="about__author position__relative d-flex align-items-center">
                            <div class="about__author--left">
                                <h4 class="about__author--name">Bruce Sutton</h4>
                                <span class="about__author--rank">Spa Manager</span>
                            </div>
                            <img class="about__author--signature display-block" src="assets/img/icon/signature.png" alt="signature">
                        </div> -->
                    </div>
                </div>
                <div class="col-lg-6">
                <div class="about__thumb d-flex">
                        <div class="">
                            <img class="" src="{{ asset('img/other/forbusiness-sec.webp')}}" alt="about-thumb">
                        </div>
                        <!-- <div class="about__thumb--items position__relative"> -->
                            <!-- <img class="about__thumb--img border-radius-5 display-block" src="{{ asset('img/other/about1.png')}}" alt="about-thumb"> -->

                        <!-- </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End contact section -->

    <!-- Start contact map area -->
    <section class="banner__section section--padding pt-0">
            <div class="container">
                <h2 class="deals__banner--content__maintitle text-center mb-4">{{ __('forbusiness.sec-head') }}</h2>
                <div class="row row-cols-md-2 row-cols-1 mb--n28 ">
                    <div class="col-lg-6 col-md-4 col-sm-6 col-6 mb-28">
                        <div class="team__items mb-4">
                            <img class="img-fluid" src="{{ asset('img/banner/strongmanagementteam.jpg')}}" alt="banner-img">
                        </div>
                        <h3 class="section__heading--maintitle">{{ __('forbusiness.sec-title1') }}</h3>
                        <p class="testimonial__items--desc">{{ __('forbusiness.sec-para1') }}</p>
                    </div>
                    <div class="col-lg-6 col-md-4 col-sm-6 col-6 mb-28 text-center">
                        <div class="team__items mb-4">
                            <img class="img-fluid" src="{{ asset('img/banner/technology-enabled-delivery.jpg')}}" alt="banner-img">
                        </div>
                        <h3 class="section__heading--maintitle">{{ __('forbusiness.sec-title2') }}</h3>
                        <p class="testimonial__items--desc">{{ __('forbusiness.sec-para2') }}</p>
                    </div>
                </div>
            </div>
    </section>
    <!-- End contact map area -->

</main>


@endsection