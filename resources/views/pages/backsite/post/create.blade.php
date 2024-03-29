@extends('layouts.dash')
@section('title', 'Create Post')
@section('content')
    @push('after-styles')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css"
            integrity="sha512-EZSUkJWTjzDlspOoPSpUFR0o0Xy7jdzW//6qhUkoZ9c4StFkVsp9fbbd0O06p9ELS3H486m4wmrCELjza4JEog=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="{{ asset('/backsite/assets/extensions/choices.js/public/assets/styles/choices.css') }}" />
        \
        <link rel="icon" type="image/png" href="https://c.cksource.com/a/1/logos/ckeditor5.png">
        <style>
            .ck-editor__editable {
                min-height: 200px;
                margin-bottom: 10px;
            }
        </style>
    @endpush
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last mb-5">
                    <h3>Create New Post</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('dashboard.index') }}">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Create New Post
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Create New Post</h4>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="row">
                        <form class="form form-horizontal" action="{{ route('post.store') }}" method="POST"
                            enctype="multipart/form-data">

                            @csrf
                            <div class="col-md-12">
                                <div class="form-group row align-items-center">
                                    <div class="col-lg-2 col-3">
                                        <label class="col-form-label">Title</label>
                                    </div>
                                    <div class="col-lg-10 col-9">
                                        <input type="text" id="title" class="form-control" name="title"
                                            placeholder="Title" value="{{ old('title') }}" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group row align-items-center">
                                    <div class="col-lg-2 col-3">
                                        <label class="col-form-label">Content</label>
                                    </div>
                                    <div class="col-lg-10 col-9">
                                        <textarea name="content" class="form-control ckeditor-5" id="ckeditor5">{{ old('content') }} </textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group row align-items-center">
                                    <div class="col-lg-2 col-3">
                                        <label class="col-form-label">Image</label>
                                    </div>
                                    <div class="col-lg-10 col-9">
                                        <img class="img-preview" src="" alt="" style="width:300px;">
                                        <div class="custom-file">
                                            <input type="file" class="form-control-file" id="photo"
                                                                name="photo" onchange="previewImage()">

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group row align-items-center">
                                    <div class="col-lg-2 col-3">
                                        <label class="col-form-label">Category</label>
                                    </div>
                                    <div class="col-lg-10 col-9">
                                        <select class="form-select" id="basicSelect" name="category_id">
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach

                                        </select>

                                    </div>
                                </div>
                            </div>





                            <div class="col-sm-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary me-1 mb-1">
                                    Submit
                                </button>
                                <a href="{{ route('post.index') }}" class="btn btn-light-secondary me-1 mb-1">
                                    Cancel
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </div>
    </section>
    </div>
@endsection
@push('after-scripts')
<script>
    function previewImage() {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');
        const oFReader = new FileReader();
        oFReader.readAsDataURL(photo.files[0]);
        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>
    <script src="{{ asset('/backsite/assets/extensions/choices.js/public/assets/scripts/choices.js') }}"></script>
    <script src="{{ asset('/backsite/assets/js/pages/form-element-select.js') }}"></script>
    <script src="{{ url('https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js') }}"></script>
    <script script script src="{{ url('https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js') }}"></script>

    <script>
        $('.dropify').dropify({
            messages: {
                'default': 'Seret dan jatuhkan file di sini atau klik',
            }
        });
    </script>
    <script>
        ClassicEditor
            .create(document.querySelector('#ckeditor5'), {
                licenseKey: '',
                toolbar: {
                    items: [
                        'heading', '|',
                        'alignment', '|',
                        'bold', 'italic', 'strikethrough', 'underline', 'subscript', 'superscript', '|',
                        'link', '|',
                        'bulletedList', 'numberedList', 'todoList',
                        '-', // break point
                        'fontfamily', 'fontsize', 'fontColor', 'fontBackgroundColor', '|',
                        'code', 'codeBlock', '|',
                        'insertTable', '|',
                        'outdent', 'indent', '|',
                        'blockQuote', '|',
                        'undo', 'redo'
                    ],
                }
            })
            .then(editor => {
                window.editor = editor;
            })
            .catch(error => {
                console.error('Oops, something went wrong!');
                console.error(
                    'Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:'
                );
                console.warn('Build id: t94173qfk3d4-jfha1cexgplv');
                console.error(error);
            });
    </script>
@endpush
