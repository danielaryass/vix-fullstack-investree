@extends('layouts.front')
@section('title', $post->title)
@section('content')

    <div class="page-section pt-5">
        <div class="container">
            <nav aria-label="Breadcrumb">
                <ul class="breadcrumb p-0 mb-0 bg-transparent">
                    <li class="breadcrumb-item"><a href="blog.html">Blog</a></li>
                    <li class="breadcrumb-item active">{{ $post->title }}</li>
                </ul>
            </nav>

            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-single-wrap">
                        <div class="header">
                            <div class="post-thumb">
                                <img src="{{ asset('/frontsite/assets/img/blog.jpg') }}" alt="">
                            </div>
                            <div class="meta-header">
                                <div class="post-author">
                                    <div class="avatar">
                                        <img src="{{ asset('/frontsite/assets/img/profile.png') }}" alt="">
                                    </div>
                                    by <a href="#">{{ $post->user->name }}</a>
                                </div>

                                <div class="post-sharer">
                                    <a href="#" class="btn social-facebook"><span
                                            class="mai-logo-facebook-f"></span></a>
                                    <a href="#" class="btn social-twitter"><span class="mai-logo-twitter"></span></a>
                                    <a href="#" class="btn social-linkedin"><span
                                            class="mai-logo-linkedin"></span></a>
                                    <a href="#" class="btn"><span class="mai-mail"></span></a>
                                </div>
                            </div>
                        </div>
                        <h1 class="post-title">{{ $post->title }}</h1>
                        <div class="post-meta">
                            <div class="post-date">
                                <span class="icon">
                                    <span class="mai-time-outline"></span>
                                </span> <a href="#">{{ $post->created_at->format('F d, Y') }}</a>
                            </div>

                        </div>
                        <div class="post-content">
                            {!! $post->content !!}
                        </div>
                    </div>

                    {{-- <div class="comment-form-wrap pt-5">
                        <h2 class="mb-5">Leave a comment</h2>
                        <form action="#" class="">
                            <div class="form-row form-group">
                                <div class="col-md-6">
                                    <label for="name">Name *</label>
                                    <input type="text" class="form-control" id="name">
                                </div>
                                <div class="col-md-6">
                                    <label for="email">Email *</label>
                                    <input type="email" class="form-control" id="email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="website">Website</label>
                                <input type="url" class="form-control" id="website">
                            </div>

                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea name="msg" id="message" cols="30" rows="8" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Post Comment" class="btn btn-primary">
                            </div>

                        </form>
                    </div> --}}

                </div>
                <div class="col-lg-4">
                    <div class="widget">
                        <!-- Widget search -->
                        {{-- <div class="widget-box">
                            <form action="#" class="search-widget">
                                <input type="text" class="form-control" placeholder="Enter keyword..">
                                <button type="submit" class="btn btn-primary btn-block">Search</button>
                            </form>
                        </div> --}}

                        <!-- Widget Categories -->
                        <div class="widget-box">
                            <h4 class="widget-title">Category</h4>
                            <div class="divider"></div>

                            <ul class="categories">
                                @foreach ($categories as $category)
                                    <li><a href="#">{{ $category->name }}</a></li>
                                @endforeach

                            </ul>
                        </div>

                        <!-- Widget recent post -->
                        <div class="widget-box">
                            <h4 class="widget-title">Recent Post</h4>
                            <div class="divider"></div>
                            @foreach ($posts as $postt)
                                <div class="blog-item">
                                    <a class="post-thumb" href="">
                                        <img src="{{ url(Storage::url($postt->image)) }}" alt="">
                                    </a>
                                    <div class="content">
                                        <h6 class="post-title"><a href="#">{{ $postt->title }}</a></h6>
                                        <div class="meta">
                                            <a href="#"><span class="mai-calendar"></span>
                                                {{ $postt->created_at->format('F d, Y') }}</a>
                                            <br>
                                            <a href="#"><span class="mai-person"></span>{{ $postt->user->name }}</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <!-- Widget Tag Cloud -->
                        {{-- <div class="widget-box">
                            <h4 class="widget-title">Tag Cloud</h4>
                            <div class="divider"></div>

                            <div class="tag-clouds">
                                <a href="#" class="tag-cloud-link">Projects</a>
                                <a href="#" class="tag-cloud-link">Design</a>
                                <a href="#" class="tag-cloud-link">Travel</a>
                                <a href="#" class="tag-cloud-link">Brand</a>
                                <a href="#" class="tag-cloud-link">Trending</a>
                                <a href="#" class="tag-cloud-link">Knowledge</a>
                                <a href="#" class="tag-cloud-link">Food</a>
                            </div>
                        </div> --}}

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
