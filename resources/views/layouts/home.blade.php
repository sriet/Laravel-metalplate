<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content=" @yield('description') ">
    <meta name="keywords" content=" @yield('keywords') ">
    <meta name="author" content="Berke Kiran">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> @yield('title') </title>
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Fontawesome CSS -->
    <link href="{{ asset('assets')}}/css/all.css" rel="stylesheet">
    <!-- Owl Carousel CSS -->
    <link href="{{ asset('assets')}}/css/owl.carousel.min.css" rel="stylesheet">
    <!-- Owl Carousel CSS -->
    <link href="{{ asset('assets')}}/css/jquery.fancybox.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset('assets')}}/css/style.css" rel="stylesheet">
    <link href="{{ asset('assets')}}/css/import.css" rel="stylesheet">
    <link href="{{ asset('assets')}}/css/movie.css" rel="stylesheet">
    <link href="{{ asset('assets')}}/css/mizukiri.css" rel="stylesheet">

    @yield('css')


</head>

<body>
    <div class="wrapper-main">
        @include('home._header')

        {{-- @include('home._menu') --}}

        @yield('content')

        @include('home._footer')
    </div>

    <!-- Stripe -->
    <script src="https://js.stripe.com/v2/"></script>
    <script src="https://js.stripe.com/v3/"></script>

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('assets')}}/vendor/jquery/jquery.min.js"></script>
    <script src="{{ asset('assets')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets')}}/vendor/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
    <script src="{{ asset('assets')}}/js/imagesloaded.pkgd.min.js"></script>
    <script src="{{ asset('assets')}}/js/isotope.pkgd.min.js"></script>
    <script src="{{ asset('assets')}}/js/filter.js"></script>
    <script src="{{ asset('assets')}}/js/jquery.appear.js"></script>
    <script src="{{ asset('assets')}}/js/owl.carousel.min.js"></script>
    <script src="{{ asset('assets')}}/js/jquery.fancybox.min.js"></script>
    <script src="{{ asset('assets')}}/js/script.js"></script>
    <script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    </script>
    @yield('javascript')
</body>

</html>