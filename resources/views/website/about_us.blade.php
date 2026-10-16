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
                            <h1 class="breadcrumb__content--title  mb-25">{{ __('about.breadcrumb-h1') }}</h1>
                            <ul class="breadcrumb__content--menu d-flex justify-content-center">
                                <li class="breadcrumb__content--menu__items"><a class="" href="{{ url('/') }}">{{ __('about.breadcrumb-home') }}</a></li>
                                <li class="breadcrumb__content--menu__items"><span class="">{{ __('about.breadcrumb-about') }}</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End breadcrumb section -->

        <!-- Start about section -->
        <section class="about__section section--padding mb-95">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about__thumb d-flex">
                            <div class="about__thumb--items">
                                <img class="about__thumb--img border-radius-5 display-block" src="{{ asset('img/other/about2.png')}}" alt="about-thumb">
                            </div>
                            <div class="about__thumb--items position__relative">
                                <img class="about__thumb--img border-radius-5 display-block" src="{{ asset('img/other/about1.png')}}" alt="about-thumb">
                                <!-- <div class="banner__bideo--play about__thumb--play">
                                    <a class="banner__bideo--play__icon about__thumb--play__icon glightbox" href="https://vimeo.com/115041822" data-gallery="video">
                                        <svg id="play" xmlns="http://www.w3.org/2000/svg" width="40.302" height="40.302" viewBox="0 0 46.302 46.302">
                                            <g id="Group_193" data-name="Group 193" transform="translate(0 0)">
                                                <path id="Path_116" data-name="Path 116" d="M39.521,6.781a23.151,23.151,0,0,0-32.74,32.74,23.151,23.151,0,0,0,32.74-32.74ZM23.151,44.457A21.306,21.306,0,1,1,44.457,23.151,21.33,21.33,0,0,1,23.151,44.457Z" fill="currentColor"/>
                                                <g id="Group_188" data-name="Group 188" transform="translate(15.588 11.19)">
                                                    <g id="Group_187" data-name="Group 187">
                                                    <path id="Path_117" data-name="Path 117" d="M190.3,133.213l-13.256-8.964a3,3,0,0,0-4.674,2.482v17.929a2.994,2.994,0,0,0,4.674,2.481l13.256-8.964a3,3,0,0,0,0-4.963Zm-1.033,3.435-13.256,8.964a1.151,1.151,0,0,1-1.8-.953V126.73a1.134,1.134,0,0,1,.611-1.017,1.134,1.134,0,0,1,1.185.063l13.256,8.964a1.151,1.151,0,0,1,0,1.907Z" transform="translate(-172.366 -123.734)" fill="currentColor"/>
                                                    </g>
                                                </g>
                                                <g id="Group_190" data-name="Group 190" transform="translate(28.593 5.401)">
                                                    <g id="Group_189" data-name="Group 189">
                                                    <path id="Path_118" data-name="Path 118" d="M328.31,70.492a18.965,18.965,0,0,0-10.886-10.708.922.922,0,1,0-.653,1.725,17.117,17.117,0,0,1,9.825,9.664.922.922,0,1,0,1.714-.682Z" transform="translate(-316.174 -59.724)" fill="currentColor"/>
                                                    </g>
                                                </g>
                                                <g id="Group_192" data-name="Group 192" transform="translate(22.228 4.243)">
                                                    <g id="Group_191" data-name="Group 191">
                                                    <path id="Path_119" data-name="Path 119" d="M249.922,47.187a19.08,19.08,0,0,0-3.2-.27.922.922,0,0,0,0,1.845,17.245,17.245,0,0,1,2.889.243.922.922,0,1,0,.31-1.818Z" transform="translate(-245.801 -46.917)" fill="currentColor"/>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                        <span class="visually-hidden">Video Play</span>
                                    </a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about__content">
                            <span class="about__content--subtitle text__secondary mb-20">{{ __('about.content-h1') }}</span>
                            <h2 class="about__content--maintitle mb-25">{{ __('about.content-h2') }}</h2>
                            <p class="about__content--desc mb-20">{{ __('about.content-p1') }}</p>
                            <p class="about__content--desc mb-25">{{ __('about.content-p2') }}</p>
                            <!-- <div class="about__author position__relative d-flex align-items-center">
                                <div class="about__author--left">
                                    <h4 class="about__author--name">Bruce Sutton</h4>
                                    <span class="about__author--rank">Spa Manager</span>
                                </div>
                                <img class="about__author--signature display-block" src="assets/img/icon/signature.png" alt="signature">
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End about section -->

        <!-- Start counterup banner section -->
        <div class="counterup__banner--section counterup__banner__bg2" id="funfactId">
            <div class="container">
                <div class="row row-cols-1 align-items-center">
                    <div class="col">
                        <div class="counterup__banner--inner position__relative d-flex align-items-center justify-content-between">
                            <div class="counterup__banner--items text-center">
                                <h2 class="counterup__banner--items__text text-white">{{ __('about.counterup-h1') }}</h2>
                                <img class="team__thumb--img img-fluid" src="{{ asset('img/other/environment.png')}}" alt="">
                            </div>
                            <div class="counterup__banner--items text-center">
                                <h2 class="counterup__banner--items__text text-white">{{ __('about.counterup-h2') }}</h2>
                                <img class="team__thumb--img img-fluid" src="{{ asset('img/other/flexibility.png')}}" alt="">
                            </div>
                            <div class="counterup__banner--items text-center">
                                <h2 class="counterup__banner--items__text text-white">{{ __('about.counterup-h3') }}</h2>
                                <img class="team__thumb--img img-fluid" src="{{ asset('img/other/aroundClock.png')}}" alt="">
                            </div>
                            <div class="counterup__banner--items text-center">
                                <h2 class="counterup__banner--items__text text-white">{{ __('about.counterup-h4') }}</h2>
                                <img class="team__thumb--img img-fluid" src="{{ asset('img/other/aroundKuwait.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End counterup banner section -->

        <!-- Start Key Features section -->
        <section class="team__section section--padding">
            <div class="container">
                <div class="section__heading text-center mb-50">
                    <h2 class="section__heading--maintitle">{{ __('about.features-h1') }}</h2>
                </div>
                <div class="team__container">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-6 col-6 h-100 custom-col">
                            <div class="team__items text-center">
                                <div class="team__thumb">
                                    <img class="team__thumb--img img-fluid h-100" src="{{ asset('img/other/online.png')}}" alt="">
                                </div>
                                <div class="team__content ">
                                    <h3 class="team__content--title">{{ __('about.featureOne') }}</h3>
                                    <span class="team__content--subtitle">{{ __('about.feature-t1') }}</span>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-6 h-100 custom-col">
                            <div class="team__items text-center">
                                <div class="team__thumb">
                                    <img class="team__thumb--img img-fluid h-100" src="{{ asset('img/other/realtime.png')}}" alt="">
                                </div>
                                <div class="team__content ">
                                    <h3 class="team__content--title">{{ __('about.featureTwo') }}</h3>
                                    <span class="team__content--subtitle">{{ __('about.feature-t2') }}</span>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-6 h-100 custom-col">
                            <div class="team__items text-center">
                                <div class="team__thumb">
                                    <img class="team__thumb--img img-fluid h-100" src="{{ asset('img/other/secure.png')}}" alt="">
                                </div>
                                <div class="team__content ">
                                    <h3 class="team__content--title">{{ __('about.featureThree') }}</h3>
                                    <span class="team__content--subtitle">{{ __('about.feature-t3') }}</span>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-6 h-100">
                            <div class="team__items text-center">
                                <div class="team__thumb">
                                    <img class="team__thumb--img img-fluid h-100" src="{{ asset('img/other/support.png')}}" alt="">
                                </div>
                                <div class="team__content ">
                                    <h3 class="team__content--title">{{ __('about.featureFour') }}</h3>
                                    <span class="team__content--subtitle">{{ __('about.feature-t4') }}</span>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Key Features section -->

        <!-- Start testimonial section -->
        <section class="testimonial__section bg__gray--color section--padding">
            <div class="container-fluid">
                <div class="section__heading text-center mb-40">
                    <h2 class="section__heading--maintitle">{{ __('about.testimonial-title') }}</h2>
                </div>
                <div class="testimonial__section--inner testimonial__swiper--activation swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide h-100">
                            <div class="testimonial__items text-center testHeight ">
                                <div class="testimonial__items--thumbnail">
                                    <img class="testimonial__items--thumbnail__img border-radius-50 w-50 img-fluid" src="{{ asset('img/other/smallhome.png')}}" alt="testimonial-img">
                                </div>
                                <div class="testimonial__items--content">
                                    <h3 class="testimonial__items--title">{{ __('about.testimonial-h1') }}</h3>
                                    <!-- <span class="testimonial__items--subtitle">fashion</span> -->
                                    <p class="testimonial__items--desc">{{ __('about.testimonial-p1') }}</p>
                                    <!-- <ul class="rating testimonial__rating d-flex justify-content-center">
                                        <li class="rating__list">
                                            <span class="rating__list--icon">
                                                <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__list--icon">
                                                <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__list--icon">
                                                <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__list--icon">
                                                <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__list--icon">
                                                <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>

                                    </ul> -->
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide h-100">
                            <div class="testimonial__items text-center testHeight ">
                                <div class="testimonial__items--thumbnail">
                                    <img class="testimonial__items--thumbnail__img border-radius-50 w-50 img-fluid" src="{{ asset('img/other/bigcompanies.png')}}" alt="testimonial-img">
                                </div>
                                <div class="testimonial__items--content">
                                    <h3 class="testimonial__items--title">{{ __('about.testimonial-h2') }}</h3>
                                    <!-- <span class="testimonial__items--subtitle">fashion</span> -->
                                    <p class="testimonial__items--desc">{{ __('about.testimonial-p2') }}</p>
                                    <!-- <ul class="rating testimonial__rating d-flex justify-content-center">
                                        <li class="rating__list">
                                            <span class="rating__list--icon">
                                                <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__list--icon">
                                                <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__list--icon">
                                                <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__list--icon">
                                                <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__list--icon">
                                                <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>

                                    </ul> -->
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide h-100">
                            <div class="testimonial__items text-center testHeight ">
                                <div class="testimonial__items--thumbnail">
                                    <img class="testimonial__items--thumbnail__img border-radius-50 w-50 img-fluid" src="{{ asset('img/other/onlineshoppers.png')}}" alt="testimonial-img">
                                </div>
                                <div class="testimonial__items--content">
                                    <h3 class="testimonial__items--title">{{ __('about.testimonial-h3') }}</h3>
                                    <!-- <span class="testimonial__items--subtitle">fashion</span> -->
                                    <p class="testimonial__items--desc">{{ __('about.testimonial-p3') }}</p>
                                    <!-- <ul class="rating testimonial__rating d-flex justify-content-center">
                                        <li class="rating__list">
                                            <span class="rating__list--icon">
                                                <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__list--icon">
                                                <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__list--icon">
                                                <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__list--icon">
                                                <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__list--icon">
                                                <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>

                                    </ul> -->
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide h-100">
                            <div class="testimonial__items text-center testHeight ">
                                <div class="testimonial__items--thumbnail">
                                    <img class="testimonial__items--thumbnail__img border-radius-50 w-50 img-fluid" src="{{ asset('img/other/time.png')}}" alt="testimonial-img">
                                </div>
                                <div class="testimonial__items--content">
                                    <h3 class="testimonial__items--title">{{ __('about.testimonial-h4') }}</h3>
                                    <!-- <span class="testimonial__items--subtitle">fashion</span> -->
                                    <p class="testimonial__items--desc">{{ __('about.testimonial-p4') }}</p>
                                    <!-- <ul class="rating testimonial__rating d-flex justify-content-center">
                                        <li class="rating__list">
                                            <span class="rating__list--icon">
                                                <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__list--icon">
                                                <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__list--icon">
                                                <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__list--icon">
                                                <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__list--icon">
                                                <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>

                                    </ul> -->
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial__items text-center testHeight h-100">
                                <div class="testimonial__items--thumbnail">
                                    <img class="testimonial__items--thumbnail__img border-radius-50 w-50 img-fluid" src="{{ asset('img/other/convenient.png')}}" alt="testimonial-img">
                                </div>
                                <div class="testimonial__items--content">
                                    <h3 class="testimonial__items--title">{{ __('about.testimonial-h5') }}</h3>
                                    <!-- <span class="testimonial__items--subtitle">fashion</span> -->
                                    <p class="testimonial__items--desc">{{ __('about.testimonial-p5') }}</p>
                                    <!-- <ul class="rating testimonial__rating d-flex justify-content-center">
                                        <li class="rating__list">
                                            <span class="rating__list--icon">
                                                <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__list--icon">
                                                <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__list--icon">
                                                <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__list--icon">
                                                <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__list--icon">
                                                <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>

                                    </ul> -->
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="testimonial__pagination swiper-pagination"></div>
                </div>
            </div>
        </section>
        <!-- End testimonial section -->

        <!-- Start shipping section -->
        <section class="shipping__section2 shipping__style3 section--padding ">
            <div class="container">
                <div class="shipping__section2--inner shipping__style3--inner d-flex justify-content-between">
                    <div class="shipping__items2 d-flex text-center justify-content-center flex-column">
                        <div class="shipping__items2--icon">
                            <img class="img-fluid" src="{{ asset('img/other/experience-first.png')}}" alt="">
                        </div>
                        <div class="shipping__items2--content">
                            <h2 class="shipping__items2--content__title h3">{{ __('about.ship-h1') }}</h2>
                            <p class="shipping__items2--content__desc">{{ __('about.ship-p1') }}</p>
                        </div>
                    </div>
                    <div class="shipping__items2 d-flex text-center justify-content-center flex-column">
                        <div class="shipping__items2--icon">
                            <img class="img-fluid" src="{{ asset('img/other/jumbo-arms-you.png')}}" alt="">
                        </div>
                        <div class="shipping__items2--content">
                        <h2 class="shipping__items2--content__title h3">{{ __('about.ship-h2') }}</h2>
                            <p class="shipping__items2--content__desc">{{ __('about.ship-p2') }}</p>
                        </div>
                    </div>
                    <div class="shipping__items2 d-flex text-center justify-content-center flex-column">
                        <div class="shipping__items2--icon">
                            <img class="img-fluid" src="{{ asset('img/other/makeithappen.png')}}" alt="">
                        </div>
                        <div class="shipping__items2--content">
                        <h2 class="shipping__items2--content__title h3">{{ __('about.ship-h3') }}</h2>
                            <p class="shipping__items2--content__desc">{{ __('about.ship-p3') }}</p>
                        </div>
                    </div>
                    <div class="shipping__items2 d-flex text-center justify-content-center flex-column">
                        <div class="shipping__items2--icon">
                            <img class="img-fluid" src="{{ asset('img/other/together.png')}}" alt="">
                        </div>
                        <div class="shipping__items2--content">
                        <h2 class="shipping__items2--content__title h3">{{ __('about.ship-h4') }}</h2>
                            <p class="shipping__items2--content__desc">{{ __('about.ship-p4') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End shipping section -->

        <!-- Start brand logo section -->
        <!-- <div class="brand__logo--section bg__secondary section--padding">
            <div class="container-fluid">
                <div class="row row-cols-1">
                    <div class="col">
                        <div class="brand__logo--section__inner d-flex justify-content-center align-items-center">
                            <div class="brand__logo--items">
                                <img class="brand__logo--items__thumbnail--img display-block" src="assets/img/logo/brand-logo1.png" alt="brand logo">
                            </div>
                            <div class="brand__logo--items">
                                <img class="brand__logo--items__thumbnail--img display-block" src="assets/img/logo/brand-logo2.png" alt="brand logo">
                            </div>
                            <div class="brand__logo--items">
                                <img class="brand__logo--items__thumbnail--img display-block" src="assets/img/logo/brand-logo3.png" alt="brand logo">
                            </div>
                            <div class="brand__logo--items">
                                <img class="brand__logo--items__thumbnail--img display-block" src="assets/img/logo/brand-logo4.png" alt="brand logo">
                            </div>
                            <div class="brand__logo--items">
                                <img class="brand__logo--items__thumbnail--img display-block" src="assets/img/logo/brand-logo5.png" alt="brand logo">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- End brand logo section -->
    </main>


@endsection
