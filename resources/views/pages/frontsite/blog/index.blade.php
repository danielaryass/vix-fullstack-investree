@extends('layouts.front')
@section('title', 'Home')
@section('content')
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
            {{-- <div class="row">
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
            </div> --}}

            <div class="row mtS-5">
                @forelse($posts as $post)
                    <div class="col-lg-4 py-3">
                        <div class="card-blog">
                            <div class="header">
                                <a href="{{ route('blog.show', $post->id) }}">
                                    <div class="post-thumb">
                                        <span
                                            class="badge badge-primary position-absolute top-2 start-0">{{ $post->category->name }}</span>
                                        <img src="{{ url(Storage::url($post->image)) }} "
                                            alt="Gambar post {{ $post->title }}" style="object-fit: cover">

                                    </div>
                                </a>
                            </div>
                            <div class="body">
                                <h5 class="post-title" style="font-weight: bold"><a
                                        href="{{ route('blog.show', $post->id) }}">{{ $post->title }}</a>
                                </h5>
                                {!! limit_words($post->content, 20) !!} <a href="{{ route('blog.show', $post->id) }}">Read More</a>
                                <div class="post-date">{{ $post->created_at->diffForHumans() }}</div>
                            </div>

                        </div>
                    </div>
                @empty
                    {{-- buat sebuah tulisan di tengah belum ada post --}}
                    <div class="col-md-12">
                        <div class="alert alert-warning">
                            <i class="fa fa-warning"></i> Belum ada post
                        </div>
                    </div>
                @endforelse



            </div>

            <nav aria-label="Page Navigation">

                <div class="">
                    {{ $posts->links() }}
                </div>
            </nav>

        </div>
    </div>
@endsection
