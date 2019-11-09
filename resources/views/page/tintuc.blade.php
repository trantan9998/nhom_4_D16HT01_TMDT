@extends('layouts.tintuc.index')
@section('content')
    <!-- Home -->

    <!-- Blog -->
    @include('layouts.tintuc.banner')
    <div class="blog">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="blog_posts d-flex flex-row align-items-start justify-content-between">

                        <!-- Blog post -->
                        @foreach($tbl_new as $new)
                        <div class="blog_post">
                            <div class="blog_image" style="background-image:url('upload/tintuc/{{$new -> hinh}}')"></div>
                            <div class="blog_text">{{$new ->tieude}}</div>
                            <div class="blog_button"><a href="chitiettintuc/{{$new -> id}}">Continue Reading</a></div>
                        </div>
                        @endforeach

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
