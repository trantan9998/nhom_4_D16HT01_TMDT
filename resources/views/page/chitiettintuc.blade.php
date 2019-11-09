@extends('layouts.tintuc.index')
@section('content')
    <div class="home">
        <div class="home_background parallax-window" data-parallax="scroll" data-image-src="upload/tintuc/{{$chitiettintuc -> hinh}}" data-speed="0.8"></div>
    </div>

    <!-- Single Blog Post -->

    <div class="single_post">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="single_post_title">{{$chitiettintuc -> tieude}}</div>
                    <p>Lượt xem: {{$chitiettintuc -> view}} | Ngày đăng: {{$chitiettintuc -> created_at}}</p>
                    <div class="single_post_text">
                      {!! $chitiettintuc -> noidung !!}
                </div>
            </div>
        </div>
            <form action="" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="row d-flex">
                    <div class="col-md-11">
                        <textarea type="text" class="form-control" name="binhluan" placeholder="Viết gì đó..."></textarea>
                        <button type="submit" class="btn btn-primary" name="sb">Gửi</button>
                    </div>
                </div>
            </form>
            @foreach($comment as $cm)
            <div class="row d-flex">
                <div>
                    <img src="" width="65px">
                </div>
                <div class="col-md-11">
                    <textarea type="text" class="form-control" readonly="true" name="binhluan">{{$cm -> NoiDung}}</textarea>
                </div>
            </div>
            @endforeach
        </div>
        <div class="container">
            <h4>Tin liên quan</h4>
            <hr>
        </div>
        <div class="blog">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="blog_posts d-flex flex-row align-items-start justify-content-between">

                            <!-- Blog post -->
                            @foreach($tinlienquan as $lq)
                            <div class="blog_post">
                                <div class="blog_image" style="background-image:url('upload/tintuc/{{$lq->hinh}}')"></div>
                                <div class="blog_text">{{$lq ->tieude}}</div>
                                <div class="blog_button"><a href="chitiettintuc/{{$lq -> id}}">Continue Reading</a></div>
                            </div>
                            @endforeach


                        </div>
                    </div>
                </div>
            </div>
        </div>


@endsection
