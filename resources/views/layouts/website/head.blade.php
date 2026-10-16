
<meta charset="utf-8">
<title>JUmbooo  @yield('page_title')</title>
<meta name="description" content="Morden Bootstrap HTML5 Template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">

 <!-- ======= All CSS Plugins here ======== -->
<link rel="stylesheet" href="{{ asset('css/plugins/swiper-bundle.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/vendor.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/app.min.css') }}">
    <!-- <link href="../../assets/css/vendor.min.css" rel="stylesheet">
    <link href="../../assets/css/app.min.css" rel="stylesheet"> -->
<link rel="stylesheet" href="{{ asset('css/plugins/glightbox.min.css') }}">
<link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<!-- Plugin css -->
<link rel="stylesheet" href="{{ asset('css/vendor/bootstrap.min.css') }}">
<style>
    .product-form {
        min-width: 600px;
        margin: 20px auto;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;

    }

    .product-form h2 {
        text-align: center;
        color: #333;
    }

    .product-form form {
        display: flex;
        flex-direction: column;
    }

    .product-form label {
        margin-bottom: 2px;
    }

    .product-form input[type="text"],
    input[type="tel"],
    input[type="number"],
    textarea,select {
        margin-bottom: 15px;
        padding: 5px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .product-form .button {
        background-color: #FFB600;
        color: white;
        padding: 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .product-form .button:hover {
        background-color: #FFB600;
    }
    .accordion-header button{
        background-color: #fff;
        color: #333;
        padding: 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 18px;
    }
    .accordion-body
    {
        background-color: #FAFAFA;
    }
    .accordion-body ,.accordion-header button
    {
        border: solid #a8a8a8 1px;
    }
    .accordion-button:not(.collapsed)
    {
        color: #333
    }
    /* ----------------------------------
     */

     .container_breif {
    max-width: 800px;
    margin: 20px auto;
    background: #fff;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
.container_breif h1 {
    text-align: center;
    color: #333;
}

.container_breif .section {
    margin-top: 20px;
}

.container_breif h2 {
    color: #555;
    border-bottom: 2px solid #ddd;
    padding-bottom: 5px;
}

.container_breif ol, .container_breif ul {
    margin: 10px 0;
    padding: 0 20px;
}

.container_breif li {
    margin-bottom: 10px;
}

.container_breif li .container_breif ul {
    list-style-type: circle;
}
</style>
<script>
    const language = document.documentElement.lang; // Get document language
    if (language === 'ar') { // Check for Arabic language
      const link = document.createElement('link');
      link.rel = 'stylesheet';
      link.href = '{{ asset('css/style-rtl.css') }}';
      document.head.appendChild(link);
    }
    else
    {
      const link = document.createElement('link');
      link.rel = 'stylesheet';
      link.href = '{{ asset('css/style.css') }}';
      document.head.appendChild(link);

    }
  </script>
<!-- Custom Style CSS
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
-->
@yield('custom_css')
