<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.frontsite.meta')
    <title>@yield('title') | Investree Blog</title>

    <link rel="stylesheet" href="{{ asset('/frontsite/assets/css/maicons.css') }}">

    <link rel="stylesheet" href="{{ asset('/frontsite/assets/css/bootstrap.css') }}">

    <link rel="stylesheet" href="{{ asset('/frontsite/assets/vendor/animate/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('/frontsite/assets/css/theme.css') }}">
</head>

<body>

    <!-- Back to top button -->
    <div class="back-to-top"></div>

    <header>
        @include('components.frontsite.navbar')

        @yield('content')

        @include('components.frontsite.footer')

        <script src="{{ asset('/frontsite/assets/js/jquery-3.5.1.min.js') }}"></script>

        <script src="{{ asset('/frontsite/assets/js/bootstrap.bundle.min.js') }}"></script>

        <script src="{{ asset('/frontsite/assets/js/google-maps.js') }}"></script>

        <script src="{{ asset('/frontsite/assets/vendor/wow/wow.min.js') }}"></script>

        <script src="{{ asset('/frontsite/assets/js/theme.js') }}"></script>

</body>

</html>
