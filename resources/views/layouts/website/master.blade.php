<!doctype html>
<html lang="{{config('app.locale')}}">

<head>

    @include('layouts.website.head')
    <?php \Debugbar::enable(); ?>

</head>

<body>

    <!-- Start preloader -->
    @if(config('app.locale') ==="en" )
    <div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader">
            <div class="animation-preloader">
                <div class="spinner"></div>
                <div class="txt-loading">
                    <span data-text-preloader="J" class="letters-loading">
                        J
                    </span>

                    <span data-text-preloader="u" class="letters-loading">
                        u
                    </span>

                    <span data-text-preloader="m" class="letters-loading">
                        m
                    </span>

                    <span data-text-preloader="b" class="letters-loading">
                        b
                    </span>

                    <span data-text-preloader="o" class="letters-loading">
                        o
                    </span>

                    <span data-text-preloader="e" class="letters-loading" style="color:red">
                        e
                    </span>

                    <span data-text-preloader="x" class="letters-loading" style="color:red">
                        x
                    </span>
                    <span data-text-preloader="p" class="letters-loading" style="color:red">
                        p
                    </span>
                    <span data-text-preloader="r" class="letters-loading" style="color:red">
                        r
                    </span>
                    <span data-text-preloader="e" class="letters-loading" style="color:red">
                        e
                    </span>
                    <span data-text-preloader="s" class="letters-loading" style="color:red">
                        s
                    </span>
                    <span data-text-preloader="s" class="letters-loading" style="color:red">
                        s
                    </span>
                </div>
            </div>
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
        </div>
    </div>
@elseif(config('app.locale') ==='ar')

    <div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader">
            <div class="animation-preloader">
                <div class="spinner"></div>
                <div class="txt-loading">
                    <span data-text-preloader="جـ" class="letters-loading">
                        جـ
                    </span>

                    <span data-text-preloader="ـا" class="letters-loading">
                        ـا
                    </span>

                    <span data-text-preloader="مـ" class="letters-loading">
                        مـ
                    </span>

                    <span data-text-preloader="ـبـ" class="letters-loading">
                        ـبـ
                    </span>

                    <span data-text-preloader="ـو" class="letters-loading">
                        ـو
                    </span>
                    &nbsp;
                    <span data-text-preloader="ا" class="letters-loading" style="color:red">
                        ا
                    </span>

                    <span data-text-preloader="كـ" class="letters-loading" style="color:red">
                        كـ
                    </span>
                    <span data-text-preloader="ـسـ" class="letters-loading" style="color:red">
                        ـسـ
                    </span>
                    <span data-text-preloader="ـبـ" class="letters-loading" style="color:red">
                        ـبـ
                    </span>
                    <span data-text-preloader="ـر" class="letters-loading" style="color:red">
                        ـر
                    </span>
                    <span data-text-preloader="يـ" class="letters-loading" style="color:red">
                        يـ
                    </span>
                    <span data-text-preloader="ـس" class="letters-loading" style="color:red">
                        ـس
                    </span>

                </div>
            </div>
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
        </div>
    </div>
    @endif
    <!-- End preloader -->


    <!-- Start header area -->
   @include('layouts.website.nav')
    <!-- End header area -->



    @yield('page_content')


    <!-- Start footer section -->
   @include('layouts.website.footer')
    <!-- End footer section -->

    <!-- Quickview Wrapper -->

    {{-- @include('website.partials.products.products_modal') --}}
    <!-- Quickview Wrapper End -->

     <!-- Start News letter popup -->
     <div class="newsletter__popup_xxx" data-animation="slideInUp">
        <div id="boxes" class="newsletter__popup--inner">
            <button class="newsletter__popup--close__btn" aria-label="search close button">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 512 512"><path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M368 368L144 144M368 144L144 368"></path></svg>
            </button>
            <div class="box newsletter__popup--box d-flex">
                <div class="newsletter__popup--box__right">
                    {{-- <img class="newsletter__popup--thumbnail__img display-block" src="{{ asset('img/banner/newsletter-popup-thumb2.png')}}" alt="newsletter-popup-thumb"> --}}

                    <div class="newsletter__popup--content">
                        <div class="newsletter__popup--subscribe" id="frm_subscribe">
                            <div class="container_breif">
                                <h1>A Brief of Beta Version complished in Jumbo</h1>
                                <h2> overview</h2>
                                <br>
                                <div class="section">
                                    <h2>Website Section</h2>
                                    <ol>
                                        <li>Home, About, Contact Us, FAQ (Multi-language: Arabic & English)</li>
                                        <li>Insert all available assets with those pages</li>
                                    </ol>
                                </div>
                                <div class="section">
                                    <h2>User Panel Dashboard</h2>
                                    <ol>
                                        <li>Login & Registration (Multi-language)</li>
                                        <li>User Dashboard including:
                                            <ul>
                                                <li>User History (Orders)</li>
                                                <li>Address Section</li>
                                                <li>Add New Shipments</li>
                                                <li>Checkout Page</li>
                                                <li>Invoice</li>
                                            </ul>
                                        </li>
                                    </ol>
                                </div>
                                <div class="section">
                                    <h2>Admin Panel Dashboard</h2>
                                    <ol>
                                        <li>User Management
                                            <ul>
                                                <li>Create, Edit & View Clients (Registered Users)</li>
                                            </ul>
                                        </li>
                                        <li>Admin Management
                                            <ul>
                                                <li>Create, Edit & View Admins</li>
                                            </ul>
                                        </li>
                                        <li>Shipment Section
                                            <ul>
                                                <li>Create, Edit & View Shipment</li>
                                            </ul>
                                        </li>
                                        <li>Order Tracking and Change Status
                                            <ul>
                                                <li>Create, Edit & View Shipment History with Tracking and Status</li>
                                            </ul>
                                        </li>
                                    </ol>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="newsletter__popup--box__right">
                    <div class="container_breif">
                        <h1>A Brief of Beta Version complished in Jumbo</h1>
                        <h2> access & hints </h2>
                       <br>
                        <div class="section">
                            <h2>User Dashboard Access</h2>
                            <p>User account to test: <a href="mailto:contact@example.invalid">contact@example.invalid</a></p>
                            <p>Password account to test: 123456789</p>
                            <p>Link for login: <a href="xxxxxxxxxxxxxxxxxxxxx">Login</a></p>
                        </div>
                        <div class="section">
                            <h2>Admin Dashboard Access</h2>
                            <p>Admin account to test: <a href="mailto:contact@example.invalid">contact@example.invalid</a></p>
                            <p>Password account to test: 123456789</p>
                            <p>Link for login: <a href="xxxxxxxxxxxxxxxxxxxxx">Login</a></p>
                        </div>
                        <div class="section">
                            <h2>Website Links</h2>
                            <p>Home: <a href="xxxxxxxxxxxxxxxxxx">Home</a></p>
                            <p>About: <a href="xxxxxxxxxxxxxxxxxx">About</a></p>
                            <p>FAQ: <a href="xxxxxxxxxxxxxxxxxx">FAQ</a></p>
                            <p>Contact Us: <a href="xxxxxxxxxxxxxxxxxx">Contact Us</a></p>
                        </div>
                        <div class="section">
                            <h2> We Are Going On With</h2>
                            <ul>
                                <li>Link all modules with each other to start with payment stage</li>
                                <li>Continue with dashboard like profile & statistics</li>
                                <li>Continue with changes and bugs discovered while going through</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End News letter popup -->

    <!-- Scroll top bar -->
    <button id="scroll__top"><svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M112 244l144-144 144 144M256 120v292"/></svg></button>

  <!-- All Script JS Plugins here  -->
 @include('layouts.website.scripts')

</body>
</html>
