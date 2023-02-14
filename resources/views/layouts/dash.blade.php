<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.meta')
    <title> @yield('title') | Investree Blog </title>
    @stack('before-style')
    @include('includes.style')
    @stack('after-style')

</head>

<body>
    <script src="{{ asset('/backsite/assets/js/initTheme.js') }}"></script>
    <div id="app">
        <div id="main">
            @include('components.sidebar')
            <header class="mb-3 ">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            <div class="page-heading ">
                <h3>@yield('title')</h3>

                @yield('content')
            </div>



            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>{{ date('Y') }} &copy; Mazer</p>
                    </div>
                    <div class="float-end">
                        <p>
                            Created with Mazer Dashboard
                            <span class="text-danger"><i class="bi bi-heart"></i></span> by
                            <a href="https://github.com/danielaryass">Daniel Aryass</a>
                        </p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    @stack('before-script')
    @include('includes.script')
    @stack('after-script')
</body>

</html>
