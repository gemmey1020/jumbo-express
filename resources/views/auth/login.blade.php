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
                            <h1 class="breadcrumb__content--title  mb-25">{{ __('login_reg.page-title') }}</h1>
                            <ul class="breadcrumb__content--menu d-flex justify-content-center">
                                <li class="breadcrumb__content--menu__items"><a class="" href="{{ url('/') }}">{{ __('login_reg.page-title2') }}</a></li>
                                <li class="breadcrumb__content--menu__items"><span class="">{{ __('login_reg.page-title') }}</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End breadcrumb section -->

        <!-- Start login section  -->
        <div class="login__section section--padding">
            <div class="container">

                    <div class="login__section--inner">
                        <div class="row row-cols-md-2 row-cols-1">
                            <form method="POST" action="{{ route('login' , config('app.locale') ) }}">
                                @csrf
                            <div class="col">
                                <div class="account__login">
                                    <div class="account__login--header mb-25">
                                        <h2 class="account__login--header__title h3 mb-10">{{ __('login_reg.login') }}</h2>
                                        <p class="account__login--header__desc">{{ __('login_reg.loginPara') }}</p>
                                    </div>
                                    <div class="account__login--inner">
                                        <input class="account__login--input" placeholder="Email Addres" type="text" name="email">
                                        <input class="account__login--input" placeholder="Password" type="password" name="password">
                                        <div class="account__login--remember__forgot mb-15 d-flex justify-content-between align-items-center">
                                            <div class="account__login--remember position__relative">
                                                <input class="checkout__checkbox--input" id="check1" type="checkbox">
                                                <span class="checkout__checkbox--checkmark"></span>
                                                <label class="checkout__checkbox--label login__remember--label" for="check1">
                                                {{ __('login_reg.remember') }}</label>
                                            </div>
                                            <button class="account__login--forgot" type="submit">{{ __('login_reg.forget') }}</button>
                                        </div>
                                        <button class="account__login--btn primary__btn" type="submit">{{ __('login_reg.login') }}</button>
                                        <div class="account__login--divide">
                                            <span class="account__login--divide__text">{{ __('login_reg.or') }}</span>
                                        </div>
                                        <!-- <div class="account__social d-flex justify-content-center mb-15">
                                            <a class="account__social--link facebook" target="_blank" href="https://www.facebook.com">Facebook</a>
                                            <a class="account__social--link google" target="_blank" href="https://www.google.com">Google</a>
                                            <a class="account__social--link twitter" target="_blank" href="https://twitter.com">Twitter</a>
                                        </div> -->
                                        <p class="account__login--signup__text">{{ __('login_reg.haveAcc') }}<button type="submit">{{ __('login_reg.signupbtn') }}</button></p>
                                    </div>
                                </div>
                            </div>
                        </form>
                            <div class="col">
                                <div class="account__login">
                                    <div class="account__login--header mb-25">
                                        <h2 class="account__login--header__title h3 mb-10">{{ __('login_reg.createAcc') }}</h2>
                                        <p class="account__login--header__desc">{{ __('login_reg.createAccPara') }}</p>
                                    </div>
                                    <form method="POST" action="{{ route('register' ,config('app.locale')) }}">
                                        @csrf
                                        <div class="account__login--inner">
                                            <input class="account__login--input" placeholder="Name" name="name" type="text">
                                            <input class="account__login--input" placeholder="Email Address" name="email" type="text">
                                            <input class="account__login--input" placeholder="Password" name="password" type="password">
                                            <input class="account__login--input" placeholder="Confirm Password" name="password_confirmation" type="password">
                                            <input class="account__login--btn primary__btn mb-10" type="submit" value="{{ __('login_reg.submitbtn') }}">
                                            <div class="account__login--remember position__relative">
                                                <input class="checkout__checkbox--input" id="check2" type="checkbox">
                                                <span class="checkout__checkbox--checkmark"></span>
                                                <label class="checkout__checkbox--label login__remember--label" for="check2">
                                                    {{ __('login_reg.terms') }}</label>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

            </div>
        </div>
        <!-- End login section  -->

        <!-- Start shipping section -->
        <!-- <section class="shipping__section2 shipping__style3 section--padding pt-0">
            <div class="container">
                <div class="shipping__section2--inner shipping__style3--inner d-flex justify-content-between">
                    <div class="shipping__items2 d-flex align-items-center">
                        <div class="shipping__items2--icon">
                            <img src="assets/img/other/shipping1.png" alt="">
                        </div>
                        <div class="shipping__items2--content">
                            <h2 class="shipping__items2--content__title h3">Shipping</h2>
                            <p class="shipping__items2--content__desc">From handpicked sellers</p>
                        </div>
                    </div>
                    <div class="shipping__items2 d-flex align-items-center">
                        <div class="shipping__items2--icon">
                            <img src="assets/img/other/shipping2.png" alt="">
                        </div>
                        <div class="shipping__items2--content">
                            <h2 class="shipping__items2--content__title h3">Payment</h2>
                            <p class="shipping__items2--content__desc">From handpicked sellers</p>
                        </div>
                    </div>
                    <div class="shipping__items2 d-flex align-items-center">
                        <div class="shipping__items2--icon">
                            <img src="assets/img/other/shipping3.png" alt="">
                        </div>
                        <div class="shipping__items2--content">
                            <h2 class="shipping__items2--content__title h3">Return</h2>
                            <p class="shipping__items2--content__desc">From handpicked sellers</p>
                        </div>
                    </div>
                    <div class="shipping__items2 d-flex align-items-center">
                        <div class="shipping__items2--icon">
                            <img src="assets/img/other/shipping4.png" alt="">
                        </div>
                        <div class="shipping__items2--content">
                            <h2 class="shipping__items2--content__title h3">Support</h2>
                            <p class="shipping__items2--content__desc">From handpicked sellers</p>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- End shipping section -->

    </main>
@endsection
    <!-- Start footer section -->



