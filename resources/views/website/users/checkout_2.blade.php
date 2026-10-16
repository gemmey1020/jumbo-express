@extends('layouts.website.master')

{{-- @section('custom_css')

@stop --}}

{{-- @section('custom_script')

@stop --}}

@section('page_content')

<div class="checkout__page--area">
    <div class="container">
        <div class="checkout__page--inner d-flex">
            <div class="main checkout__mian">
                <header class="main__header checkout__mian--header mb-30">
                    <h1 class="main__logo--title"><a class="logo logo__left mb-20" href="{{ url('/') }}"><img src="{{ asset('img/logo/nav-log.png')}}" alt="logo"></a></h1>
                    <details class="order__summary--mobile__version">
                        <summary class="order__summary--toggle border-radius-5">
                            <span class="order__summary--toggle__inner">
                                <span class="order__summary--toggle__icon">
                                    <svg width="20" height="19" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.178 13.088H5.453c-.454 0-.91-.364-.91-.818L3.727 1.818H0V0h4.544c.455 0 .91.364.91.818l.09 1.272h13.45c.274 0 .547.09.73.364.18.182.27.454.18.727l-1.817 9.18c-.09.455-.455.728-.91.728zM6.27 11.27h10.09l1.454-7.362H5.634l.637 7.362zm.092 7.715c1.004 0 1.818-.813 1.818-1.817s-.814-1.818-1.818-1.818-1.818.814-1.818 1.818.814 1.817 1.818 1.817zm9.18 0c1.004 0 1.817-.813 1.817-1.817s-.814-1.818-1.818-1.818-1.818.814-1.818 1.818.814 1.817 1.818 1.817z" fill="currentColor"></path>
                                    </svg>
                                </span>
                                <span class="order__summary--toggle__text show">
                                    <span>{{ __('checkout_2.checkoutshowSummarymob') }}</span>
                                    <svg width="11" height="6" xmlns="http://www.w3.org/2000/svg" class="order-summary-toggle__dropdown" fill="currentColor"><path d="M.504 1.813l4.358 3.845.496.438.496-.438 4.642-4.096L9.504.438 4.862 4.534h.992L1.496.69.504 1.812z"></path></svg>
                                </span>
                                <span class="order__summary--final__price">{{ __('checkout_2.totalPrice') }}</span>
                            </span>
                        </summary>
                        <div class="order__summary--section">
                            <div class="cart__table checkout__product--table">
                                <table class="summary__table">
                                    <tbody class="summary__table--body">
                                        <tr class=" summary__table--items">
                                            <td class=" summary__table--list">
                                                <div class="product__image two  d-flex align-items-center">
                                                    <div class="product__thumbnail border-radius-5">
                                                        <a href="product-details.html"><img class="border-radius-5" src="{{ asset('img/product/small-product7.png')}}" alt="cart-product"></a>
                                                        <span class="product__thumbnail--quantity">1</span>
                                                    </div>
                                                    <div class="product__description">
                                                        <h3 class="product__description--name h4"><a href="product-details.html">{{ __('checkout_2.productName') }}</a></h3>
                                                        <span class="product__description--variant">{{ __('checkout_2.productdesc') }}</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class=" summary__table--list">
                                                <span class="cart__price">{{ __('checkout_2.productprice') }}</span>
                                            </td>
                                        </tr>
                                        <!-- <tr class="summary__table--items">
                                            <td class=" summary__table--list">
                                                <div class="cart__product d-flex align-items-center">
                                                    <div class="product__thumbnail border-radius-5">
                                                        <a href="product-details.html"><img class="border-radius-5" src="{{ asset('img/product/small-product2.png')}}" alt="cart-product"></a>
                                                        <span class="product__thumbnail--quantity">1</span>
                                                    </div>
                                                    <div class="product__description">
                                                        <h3 class="product__description--name h4"><a href="product-details.html">Vegetable-healthy</a></h3>
                                                        <span class="product__description--variant">COLOR: Green</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class=" summary__table--list">
                                                <span class="cart__price">£82.00</span>
                                            </td>
                                        </tr>
                                        <tr class=" summary__table--items">
                                            <td class=" summary__table--list">
                                                <div class="cart__product d-flex align-items-center">
                                                    <div class="product__thumbnail border-radius-5">
                                                        <a href="product-details.html"><img class="border-radius-5" src="{{ asset('img/product/small-product4.png')}}" alt="cart-product"></a>
                                                        <span class="product__thumbnail--quantity">1</span>
                                                    </div>
                                                    <div class="product__description">
                                                        <h3 class="product__description--name h4"><a href="product-details.html">Raw-onions-surface</a></h3>
                                                        <span class="product__description--variant">COLOR: White</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class=" summary__table--list">
                                                <span class="cart__price">£78.00</span>
                                            </td>
                                        </tr> -->
                                    </tbody>
                                </table>
                            </div>
                            <div class="checkout__discount--code">
                                <form class="d-flex" action="#">
                                    <label>
                                        <input class="checkout__discount--code__input--field border-radius-5" placeholder="Gift card or discount code"  type="text">
                                    </label>
                                    <button class="checkout__discount--code__btn primary__btn border-radius-5" type="submit">{{ __('checkout_2.applybtn') }}</button>
                                </form>
                            </div>
                            <div class="checkout__total">
                                <table class="checkout__total--table">
                                    <tbody class="checkout__total--body">
                                        <tr class="checkout__total--items">
                                            <td class="checkout__total--title text-left">{{ __('checkout_2.subtotal') }}</td>
                                            <td class="checkout__total--amount text-right">{{ __('checkout_2.prePrice') }}</td>
                                        </tr>
                                        <tr class="checkout__total--items">
                                            <td class="checkout__total--title text-left">{{ __('checkout_2.ship') }}</td>
                                            <td class="checkout__total--calculated__text text-right">{{ __('checkout_2.shipPara') }}</td>
                                        </tr>
                                    </tbody>
                                    <tfoot class="checkout__total--footer">
                                        <tr class="checkout__total--footer__items">
                                            <td class="checkout__total--footer__title checkout__total--footer__list text-left">{{ __('checkout_2.total') }}</td>
                                            <td class="checkout__total--footer__amount checkout__total--footer__list text-right">{{ __('checkout_2.prePrice') }}</td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </details>
                    <nav>
                        <ol class="breadcrumb checkout__breadcrumb d-flex">
                            <li class="breadcrumb__item breadcrumb__item--completed d-flex align-items-center">
                                <a class="breadcrumb__link" href="cart.html">{{ __('checkout_2.cart') }}</a>
                                <svg class="readcrumb__chevron-icon" xmlns="http://www.w3.org/2000/svg" width="17.007" height="16.831" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M184 112l144 144-144 144"></path></svg>
                            </li>
                            <li class="breadcrumb__item breadcrumb__item--current d-flex align-items-center">
                                <a class="breadcrumb__link" href="cart.html">{{ __('checkout_2.info') }}</a>
                                <svg class="readcrumb__chevron-icon" xmlns="http://www.w3.org/2000/svg" width="17.007" height="16.831" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M184 112l144 144-144 144"></path></svg>
                            </li>
                            <li class="breadcrumb__item breadcrumb__item--blank d-flex align-items-center">
                                <a class="breadcrumb__link" href="cart.html">{{ __('checkout_2.ship') }}</a>
                                <svg class="readcrumb__chevron-icon" xmlns="http://www.w3.org/2000/svg" width="17.007" height="16.831" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M184 112l144 144-144 144"></path></svg>
                            </li>
                                <li class="breadcrumb__item breadcrumb__item--blank">
                                <span class="breadcrumb__text current">{{ __('checkout_2.payment') }}</span>
                            </li>
                        </ol>
                        </nav>
                </header>
                <main class="main__content_wrapper">
                    <form action="#">
                        @foreach($cart->items as $item)
                        <div class="checkout__content--step checkout__contact--information2 border-radius-5">
                            <div class="checkout__review d-flex justify-content-between align-items-center">
                                <div class="checkout__review--inner d-flex align-items-center">
                                    <label class="checkout__review--label">{{ __('checkout_2.shipment_name') }}</label>
                                    <span class="checkout__review--content mx-2">{{ $item->shipment->shipment_name }}</span>
                                    <input type="text"  class="checkout__review--input" style="display: none;" id="address" >
                                </div>
                                {{-- <div class="checkout__review--link" >
                                    <button class="checkout__review--link__text" onclick="changeAddress()" type="button" id="editInput">Change</button>
                                </div> --}}
                            </div>
                            <div class="checkout__review d-flex justify-content-between align-items-center">

                                <div class="checkout__review--inner d-flex align-items-center">
                                    <label class="checkout__review--label"> {{ __('checkout_2.shipfrom') }}</label>
                                    {{-- <span class="checkout__review--content"> {{ $item->shipment->getFormattedAddress('origin') }}</span> --}}
                                    <select name="shipments[{{ $item->shipment->id }}][origin_address_id]" id="origin_address_{{ $item->shipment->id }}" class="form-control" required>
                                        @foreach ($addresses as $address)
                                            <option value="{{ $address->id }}" {{ $address->id == $item->shipment->origin_address_id ? 'selected' : '' }}>
                                                {{ $address->getFormattedAddress() }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="checkout__review--link">
                                    <button class="checkout__review--link__text" data-open="addressModal" type="button">Change</button>
                                    {{-- <button class="checkout__review--link__text" type="button">{{ __('checkout_2.changebtn') }}</button> --}}
                                </div>
                            </div>

                            <div class="checkout__review d-flex justify-content-between align-items-center">

                                <div class="checkout__review--inner d-flex align-items-center">
                                    <label class="checkout__review--label"> {{ __('checkout_2.shipto') }}</label>
                                    {{-- <span class="checkout__review--content"> {{ $item->shipment->getFormattedAddress('destination') }} </span> --}}

                                    <select name="shipments[{{ $item->shipment->id }}][destination_address_id]" id="destination_address_{{ $item->shipment->id }}" class="form-control" required>
                                        @foreach ($addresses as $address)
                                            <option value="{{ $address->id }}" {{ $address->id == $item->shipment->destination_address_id ? 'selected' : '' }}>
                                                {{ $address->getFormattedAddress() }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="checkout__review--link">
                                    <button class="checkout__review--link__text" data-open="addressModal" type="button">Change</button>
                                    {{-- <button class="checkout__review--link__text" type="button">{{ __('checkout_2.changebtn') }}</button> --}}
                                </div>
                            </div>
                            <div class="checkout__review d-flex justify-content-between align-items-center">
                                <div class="checkout__review--inner d-flex align-items-center">
                                    <label class="checkout__review--label"> {{ __('checkout_2.method') }}</label>
                                    <span class="checkout__review--content"> <strong>Cash</strong></span>
                                </div>
                                <div class="checkout__review--link">
                                    <button class="checkout__review--link__text" type="button">{{ __('checkout_2.changebtn') }}</button>
                                </div>
                            </div>

                            <div class="checkout__review d-flex justify-content-between align-items-center">
                                <div class="checkout__review--inner d-flex align-items-center">
                                    <label class="checkout__review--label"> {{ __('checkout_2.total_ship_price') }}</label>
                                    <span class="checkout__review--content"> <strong>$0.23</strong></span>
                                </div>
                                <div class="checkout__review--link">
                                    <button class="checkout__review--link__text" type="button">{{ __('checkout_2.changebtn') }}</button>
                                </div>
                            </div>
                        </div>
                        <hr>
                        @endforeach


                        {{-- <div class="checkout__content--step checkout__contact--information2 border-radius-5">
                            <div class="checkout__review d-flex justify-content-between align-items-center">
                                <div class="checkout__review--inner d-flex align-items-center">
                                    <label class="checkout__review--label">{{ __('checkout_2.contact') }}</label>
                                    <span class="checkout__review--content mx-2">{{ __('checkout_2.mail') }}</span>
                                    <input type="text"  class="checkout__review--input" style="display: none;" id="address" >
                                </div>
                                <div class="checkout__review--link" >
                                    <button class="checkout__review--link__text" onclick="changeAddress()" type="button" id="editInput">Change</button>
                                </div>
                            </div>
                            <div class="checkout__review d-flex justify-content-between align-items-center">
                                <div class="checkout__review--inner d-flex align-items-center">
                                    <label class="checkout__review--label"> {{ __('checkout_2.shipto') }}</label>
                                    <span class="checkout__review--content"> {{ __('checkout_2.address') }}</span>
                                </div>
                                <div class="checkout__review--link">
                                    <button class="checkout__review--link__text" data-open="addressModal" type="button">Change</button>
                                    <button class="checkout__review--link__text" type="button">{{ __('checkout_2.changebtn') }}</button>
                                </div>
                            </div>
                            <div class="checkout__review d-flex justify-content-between align-items-center">
                                <div class="checkout__review--inner d-flex align-items-center">
                                    <label class="checkout__review--label"> {{ __('checkout_2.method') }}</label>
                                    <span class="checkout__review--content"> <strong>$0.23</strong></span>
                                </div>
                                <div class="checkout__review--link">
                                    <button class="checkout__review--link__text" type="button">{{ __('checkout_2.changebtn') }}</button>
                                </div>
                            </div>

                            <div class="checkout__review d-flex justify-content-between align-items-center">
                                <div class="checkout__review--inner d-flex align-items-center">
                                    <label class="checkout__review--label"> {{ __('checkout_2.method') }}</label>
                                    <span class="checkout__review--content"> <strong>$0.23</strong></span>
                                </div>
                                <div class="checkout__review--link">
                                    <button class="checkout__review--link__text" type="button">{{ __('checkout_2.changebtn') }}</button>
                                </div>
                            </div>
                        </div>
<hr>
                        <div class="checkout__content--step checkout__contact--information2 border-radius-5">
                            <div class="checkout__review d-flex justify-content-between align-items-center">
                                <div class="checkout__review--inner d-flex align-items-center">
                                    <label class="checkout__review--label">{{ __('checkout_2.contact') }}</label>
                                    <span class="checkout__review--content mx-2">{{ __('checkout_2.mail') }}</span>
                                    <input type="text"  class="checkout__review--input" style="display: none;" id="address" >
                                </div>
                                <div class="checkout__review--link" >
                                    <button class="checkout__review--link__text" onclick="changeAddress()" type="button" id="editInput">Change</button>
                                </div>
                            </div>
                            <div class="checkout__review d-flex justify-content-between align-items-center">
                                <div class="checkout__review--inner d-flex align-items-center">
                                    <label class="checkout__review--label"> {{ __('checkout_2.shipto') }}</label>
                                    <span class="checkout__review--content"> {{ __('checkout_2.address') }}</span>
                                </div>
                                <div class="checkout__review--link">
                                    <button class="checkout__review--link__text" data-open="addressModal" type="button">Change</button>
                                    <button class="checkout__review--link__text" type="button">{{ __('checkout_2.changebtn') }}</button>
                                </div>
                            </div>
                            <div class="checkout__review d-flex justify-content-between align-items-center">
                                <div class="checkout__review--inner d-flex align-items-center">
                                    <label class="checkout__review--label"> {{ __('checkout_2.method') }}</label>
                                    <span class="checkout__review--content"> <strong>$0.23</strong></span>
                                </div>
                                <div class="checkout__review--link">
                                    <button class="checkout__review--link__text" type="button">{{ __('checkout_2.changebtn') }}</button>
                                </div>
                            </div>

                            <div class="checkout__review d-flex justify-content-between align-items-center">
                                <div class="checkout__review--inner d-flex align-items-center">
                                    <label class="checkout__review--label"> {{ __('checkout_2.method') }}</label>
                                    <span class="checkout__review--content"> <strong>$0.23</strong></span>
                                </div>
                                <div class="checkout__review--link">
                                    <button class="checkout__review--link__text" type="button">{{ __('checkout_2.changebtn') }}</button>
                                </div>
                            </div>
                        </div>
<hr> --}}

                        <div class="checkout__content--step section__shipping--address">
                            <div class="section__header mb-25">
                                <h3 class="section__header--title">{{ __('checkout_2.payment') }}</h3>
                                <p class="section__header--desc">{{ __('checkout_2.paymentPara') }}</p>
                            </div>
                            <div class="checkout__content--step__inner3 border-radius-5">
                                <div class="checkout__address--content__header d-flex align-items-center justify-content-between">
                                    <span class="checkout__address--content__title">{{ __('checkout_2.creditCard') }}</span>
                                    <span class="heckout__address--content__icon"><img src="{{ asset('img/icon/credit-card.svg')}}" alt="card"></span>
                                </div>
                                <div class="checkout__content--input__box--wrapper ">
                                    <div class="row">
                                        <div class="col-12 mb-12">
                                            <div class="checkout__input--list position__relative">
                                                <label>
                                                    <input class="checkout__input--field border-radius-5" placeholder="Card number"  type="text">
                                                </label>
                                                <button class="checkout__input--field__button" type="button">

                                                    <svg xmlns="http://www.w3.org/2000/svg" width="15.51" height="15.443" viewBox="0 0 512 512"><path d="M336 208v-95a80 80 0 00-160 0v95" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><rect x="96" y="208" width="320" height="272" rx="48" ry="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-12">
                                            <div class="checkout__input--list">
                                                <label>
                                                    <input class="checkout__input--field border-radius-5" placeholder="Name on card"  type="text">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-12">
                                            <div class="checkout__input--list">
                                                <label>
                                                    <input class="checkout__input--field border-radius-5" placeholder="piration date (MM / YY)"  type="text">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-12">
                                            <div class="checkout__input--list position__relative">
                                                <label>
                                                    <input class="checkout__input--field border-radius-5" placeholder="Security code"  type="text">
                                                </label>
                                                <button class="checkout__input--field__button" type="button">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18.51" height="18.443" viewBox="0 0 512 512"><title>Help Circle</title><path d="M256 80a176 176 0 10176 176A176 176 0 00256 80z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><path d="M200 202.29s.84-17.5 19.57-32.57C230.68 160.77 244 158.18 256 158c10.93-.14 20.69 1.67 26.53 4.45 10 4.76 29.47 16.38 29.47 41.09 0 26-17 37.81-36.37 50.8S251 281.43 251 296" fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="28"/><circle cx="250" cy="348" r="20"/></svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="checkout__content--step section__shipping--address pt-10">
                            <div class="section__header mb-25">
                                <h3 class="section__header--title">{{ __('checkout_2.billingadd') }}</h3>
                                <p class="section__header--desc">{{ __('checkout_2.billingPara') }}</p>
                            </div>
                            <div class="checkout__content--step__inner3 border-radius-5">
                                <div class="checkout__address--content__header">
                                    <div class="shipping__contact--box__list">
                                        <div class="shipping__radio--input">
                                            <input class="shipping__radio--input__field" id="radiobox" name="checkmethod" type="radio">
                                        </div>
                                        <label class="shipping__radio--label" for="radiobox">
                                            <span class="shipping__radio--label__primary">{{ __('checkout_2.sameOrNot') }}</span>
                                        </label>
                                    </div>
                                    <div class="shipping__contact--box__list">
                                        <div class="shipping__radio--input">
                                            <input class="shipping__radio--input__field" id="radiobox2" name="checkmethod" type="radio">
                                        </div>
                                        <label class="shipping__radio--label" for="radiobox2">
                                            <span class="shipping__radio--label__primary">{{ __('checkout_2.usediffAdd') }}</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="checkout__content--input__box--wrapper ">
                                    <div class="row">
                                        <div class="col-lg-6 mb-12">
                                            <div class="checkout__input--list ">
                                                <label>
                                                    <input class="checkout__input--field border-radius-5" placeholder="First name (optional)"  type="text">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-12">
                                            <div class="checkout__input--list">
                                                <label>
                                                    <input class="checkout__input--field border-radius-5" placeholder="Last name"  type="text">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-12">
                                            <div class="checkout__input--list">
                                                <label>
                                                    <input class="checkout__input--field border-radius-5" placeholder="Address1"  type="text">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-12">
                                            <div class="checkout__input--list">
                                                <label>
                                                    <input class="checkout__input--field border-radius-5" placeholder="Apartment, suite, etc. (optional)"  type="text">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-12">
                                            <div class="checkout__input--list">
                                                <label>
                                                    <input class="checkout__input--field border-radius-5" placeholder="City"  type="text">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-12">
                                            <div class="checkout__input--list checkout__input--select select">
                                                <label class="checkout__select--label" for="country">{{ __('checkout_2.country') }}</label>
                                                <select class="checkout__input--select__field border-radius-5" id="country">
                                                    <option value="1">India</option>
                                                    <option value="2">United States</option>
                                                    <option value="3">Netherlands</option>
                                                    <option value="4">Afghanistan</option>
                                                    <option value="5">Islands</option>
                                                    <option value="6">Albania</option>
                                                    <option value="7">Antigua Barbuda</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-12">
                                            <div class="checkout__input--list">
                                                <label>
                                                    <input class="checkout__input--field border-radius-5" placeholder="Postal code"  type="text">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <div class="checkout__content--step__footer d-flex align-items-center">
                            <a class="continue__shipping--btn primary__btn border-radius-5" href="{{ route('cart.cart_invoice' , ['locale' => config('app.locale')]) }}">{{ __('checkout_2.paybtn') }}</a>
                            <a class="previous__link--content" href="{{ route('cart.index' , ['locale' => config('app.locale')])}}">{{ __('checkout_2.backtoShip') }}</a>
                        </div>
                    </form>
                    <ul id="itemsList">
                        <!-- List items will be added here dynamically -->
                    </ul>

                    <!-- Simple form for editing -->
                    <div id="editForm" style="display:none;">
                        <input type="text" id="editInput">
                        <button onclick="saveEdit()">{{ __('checkout_2.savebtn') }}</button>
                        <button onclick="cancelEdit()">{{ __('checkout_2.cancelbtn') }}</button>
                    </div>
                </main>


                <footer class="main__footer checkout__footer">
                    <p class="copyright__content">{{ __('checkout_2.copyR') }}<a class="copyright__content--link text__primary" href="{{ url('/') }}"></a></p>
                </footer>
            </div>
            <aside class="checkout__sidebar sidebar">
                <div class="cart__table checkout__product--table">
                    <table class="cart__table--inner">
                        <tbody class="cart__table--body">
                            @foreach($cart->items as $item)
                            <tr class="cart__table--body__items">
                                <td class="cart__table--body__list">
                                    <div class="product__image two  d-flex align-items-center">
                                        <div class="product__thumbnail border-radius-5">
                                            <a href="product-details.html"><img class="border-radius-5" src="{{ asset('/') }}/img/shipments/{{ $item->shipment->image }}" alt="cart-product"></a>
                                            <span class="product__thumbnail--quantity">1</span>
                                        </div>
                                        <div class="product__description">
                                            <h3 class="product__description--name h4"><a href="#">{{$item->shipment->shipment_name }}</a></h3>
                                            <span class="product__description--variant">{{ __('checkout_2.productdesc') }}</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="cart__table--body__list">
                                    <span class="cart__price">{{ __('checkout_2.productprice') }}  £65.00</span>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                <div class="checkout__discount--code">
                    <form class="d-flex" action="#">
                        <label>
                            <input class="checkout__discount--code__input--field border-radius-5" placeholder="Gift card or discount code"  type="text">
                        </label>
                        <button class="checkout__discount--code__btn primary__btn border-radius-5" type="submit">{{ __('checkout_2.applybtn') }}</button>
                    </form>
                </div>
                <div class="checkout__total">
                    <table class="checkout__total--table">
                        <tbody class="checkout__total--body">
                            <tr class="checkout__total--items">
                                <td class="checkout__total--title text-left">{{ __('checkout_2.subtotal') }}</td>
                                <td class="checkout__total--amount text-right">{{ __('checkout_2.prePrice') }}</td>
                            </tr>
                            <tr class="checkout__total--items">
                                <td class="checkout__total--title text-left">{{ __('checkout_2.ship') }}</td>
                                <td class="checkout__total--calculated__text text-right">{{ __('checkout_2.shipPara') }}</td>
                            </tr>
                        </tbody>
                        <tfoot class="checkout__total--footer">
                            <tr class="checkout__total--footer__items">
                                <td class="checkout__total--footer__title checkout__total--footer__list text-left">{{ __('checkout_2.total') }}</td>
                                <td class="checkout__total--footer__amount checkout__total--footer__list text-right">{{ __('checkout_2.prePrice') }}</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </aside>
        </div>
    </div>
</div>
{{-- @include('website.partials.account_panel.email_modal')
@include('website.partials.account_panel.address_modal') --}}


@endsection
