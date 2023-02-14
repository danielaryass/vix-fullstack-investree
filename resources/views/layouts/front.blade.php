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

        <div class="container">
            <div class="page-banner">
                <div class="row justify-content-center align-items-center h-100"
                    style="background-image:url({{ asset('/frontsite/assets/img/blog.jpg') }}); object-fit: cover;">
                    <div class="col-md-6">
                        <h1 class="text-center text-white">Blog</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="page-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-10">
                    <form action="#" class="form-search-blog">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <select id="categories" class="custom-select bg-light">
                                    <option>All Categories</option>
                                    <option value="travel">Travel</option>
                                    <option value="lifestyle">LifeStyle</option>
                                    <option value="healthy">Healthy</option>
                                    <option value="food">Food</option>
                                </select>
                            </div>
                            <input type="text" class="form-control" placeholder="Enter keyword..">
                        </div>
                    </form>
                </div>
                <div class="col-sm-2 text-sm-right">
                    <button class="btn btn-secondary">Filter <span class="mai-filter"></span></button>
                </div>
            </div>

            <div class="row my-5">
                <div class="col-lg-4 py-3">
                    <div class="card-blog">
                        <div class="header">
                            <div class="post-thumb">
                                <img src="{{ asset('/frontsite/assets/img/blog/blog-1.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="body">
                            <h5 class="post-title"><a href="blog-details.html">Source of Content Inspiration</a></h5>
                            <div class="post-date">Posted on <a href="#">27 Jan 2020</a></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 py-3">
                    <div class="card-blog">
                        <div class="header">
                            <div class="post-thumb">
                                <img src="{{ asset('/frontsite/assets/img/blog/blog-2.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="body">
                            <h5 class="post-title"><a href="blog-details.html">Source of Content Inspiration</a></h5>
                            <div class="post-date">Posted on <a href="#">27 Jan 2020</a></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 py-3">
                    <div class="card-blog">
                        <div class="header">
                            <div class="post-thumb">
                                <img src="{{ asset('/frontsite/assets/img/blog/blog-3.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="body">
                            <h5 class="post-title"><a href="blog-details.html">Source of Content Inspiration</a></h5>
                            <div class="post-date">Posted on <a href="#">27 Jan 2020</a></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 py-3">
                    <div class="card-blog">
                        <div class="header">
                            <div class="post-thumb">
                                <img src="{{ asset('/frontsite/assets/img/blog/blog-4.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="body">
                            <h5 class="post-title"><a href="blog-details.html">Source of Content Inspiration</a></h5>
                            <div class="post-date">Posted on <a href="#">27 Jan 2020</a></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 py-3">
                    <div class="card-blog">
                        <div class="header">
                            <div class="post-thumb">
                                <img src="{{ asset('/frontsite/assets/img/blog/blog-5.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="body">
                            <h5 class="post-title"><a href="blog-details.html">Source of Content Inspiration</a></h5>
                            <div class="post-date">Posted on <a href="#">27 Jan 2020</a></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 py-3">
                    <div class="card-blog">
                        <div class="header">
                            <div class="post-thumb">
                                <img src="{{ asset('/frontsite/assets/img/blog/blog-6.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="body">
                            <h5 class="post-title"><a href="blog-details.html">Source of Content Inspiration</a></h5>
                            <div class="post-date">Posted on <a href="#">27 Jan 2020</a></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 py-3">
                    <div class="card-blog">
                        <div class="header">
                            <div class="post-thumb">
                                <img src="{{ asset('/frontsite/assets/img/blog/blog-1.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="body">
                            <h5 class="post-title"><a href="blog-details.html">Source of Content Inspiration</a></h5>
                            <div class="post-date">Posted on <a href="#">27 Jan 2020</a></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 py-3">
                    <div class="card-blog">
                        <div class="header">
                            <div class="post-thumb">
                                <img src="{{ asset('/frontsite/assets/img/blog/blog-2.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="body">
                            <h5 class="post-title"><a href="blog-details.html">Source of Content Inspiration</a></h5>
                            <div class="post-date">Posted on <a href="#">27 Jan 2020</a></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 py-3">
                    <div class="card-blog">
                        <div class="header">
                            <div class="post-thumb">
                                <img src="{{ asset('/frontsite/assets/img/blog/blog-3.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="body">
                            <h5 class="post-title"><a href="blog-details.html">Source of Content Inspiration</a></h5>
                            <div class="post-date">Posted on <a href="#">27 Jan 2020</a></div>
                        </div>
                    </div>
                </div>

            </div>

            <nav aria-label="Page Navigation">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active" aria-current="page">
                        <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>

        </div>
    </div>

    @include('components.frontsite.footer')

    <script src="{{ asset('/frontsite/assets/js/jquery-3.5.1.min.js') }}"></script>

    <script src="{{ asset('/frontsite/assets/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('/frontsite/assets/js/google-maps.js') }}"></script>

    <script src="{{ asset('/frontsite/assets/vendor/wow/wow.min.js') }}"></script>

    <script src="{{ asset('/frontsite/assets/js/theme.js') }}"></script>

</body>

</html>
