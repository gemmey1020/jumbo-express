
@extends('layouts.website.master')

{{-- @section('custom_css')

@stop --}}

{{-- @section('custom_script')

@stop --}}

@section('page_content')


<main class="main__content_wrapper">

    <!-- Start breadcrumb section -->
    <section class="breadcrumb__section forbusiness__bg mb-5">
        <div class="container">
            <div class="row row-cols-1">
                <div class="col">
                    <div class="breadcrumb__content text-center">
                        <h1 class="breadcrumb__content--title  mb-25">{{ __('tracking.pagetitle') }}</h1>
                        <ul class="breadcrumb__content--menu d-flex justify-content-center">
                            <li class="breadcrumb__content--menu__items"><a class="" href="{{ url('/') }}">{{ __('tracking.pagetitle2') }}</a></li>
                            <li class="breadcrumb__content--menu__items"><span class="">{{ __('tracking.pagetitle') }}</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumb section -->

    <!-- Start contact section -->

    <!-- End contact section -->
    <!-- <div class="header__search--widget d-flex justify-content-center align-items-center">
        <form class="d-flex header__search--form" action="#">
            <div class="header__search--box">
                <label>
                    <input class="header__search--input" placeholder="{{ __('nav.track_search') }}" type="text">
                </label>
                <button class="header__search--button bg__secondary text-white" type="submit" aria-label="search button">
                    <svg class="header__search--button__svg" xmlns="http://www.w3.org/2000/svg" width="27.51" height="26.443" viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></path><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"></path></svg>
                </button>
            </div>
        </form>
    </div> -->

    <!-- <section class="breadcrumb__section">
            <h1>Track Your Shipment</h1>
            <p class="about__content--desc mb-25">All Order Updates will be available through this link</p>
            <form id="tracking-form">
                <label for="tracking-number">Enter your tracking number:</label>
                <input type="text" id="tracking-number" name="tracking-number" placeholder="Tracking Number">
                <button type="submit">Track</button>
            </form>
            <div id="tracking-result">

            </div>
    </section> -->
    <h1 class="about__thumb text-center mb-3">{{ __('tracking.track-title') }}</h1>
                <p class="about__content--desc text-center mb-25">{{ __('tracking.track-para') }}</p>
    <div class="header__search--widget d-flex justify-content-center align-items-center flex-column">
        <section class="breadcrumb__section">

                <form class="d-flex header__search--form" id="tracking-form">
                    <div class="header__search--box">
                        <label>
                            <input class="header__search--input" placeholder="{{ __('nav.track_search') }}" type="text" id="tracking-number" name="tracking-number">
                        </label>
                        <button class="header__search--button bg__secondary text-white" type="submit" aria-label="search button">
                            <svg class="header__search--button__svg" xmlns="http://www.w3.org/2000/svg" width="27.51" height="26.443" viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></path><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"></path></svg>
                        </button>
                    </div>
                </form>
                <div id="tracking-result">
                    <!-- Tracking results will be displayed here -->
                </div>
        </section>
    </div>


    <nav class="nav nav-wizards-1 my-5" id="track-wizard">
        <div class="nav-item col">
            <a class="nav-link disabled" href="#">
                <div class="nav-no">0</div>
                <div class="nav-text">Canceled</div>
            </a>
        </div>
        <div class="nav-item col">
            <a class="nav-link disabled" href="#">
                <div class="nav-no">1</div>
                <div class="nav-text">Confirmed</div>
            </a>
        </div>
        <div class="nav-item col">
            <a class="nav-link disabled" href="#">
                <div class="nav-no">2</div>
                <div class="nav-text">Preparing</div>
            </a>
        </div>
        <div class="nav-item col">
            <a class="nav-link disabled" href="#">
                <div class="nav-no">3</div>
                <div class="nav-text">Shipped</div>
            </a>
        </div>
        <div class="nav-item col">
            <a class="nav-link disabled" href="#">
                <div class="nav-no">4</div>
                <div class="nav-text">In Way</div>
            </a>
        </div>
        <div class="nav-item col">
            <a class="nav-link disabled" href="#">
                <div class="nav-no">5</div>
                <div class="nav-text">Arrived</div>
            </a>
        </div>
    </nav>


</main>


@endsection