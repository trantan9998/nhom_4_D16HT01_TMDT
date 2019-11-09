@extends('admin.layout.index')
@section('content')
    <div class="container-fluid">
        <form action="admin/slide/them" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $err)
                        {{$err}}<br>
                    @endforeach
                </div>
            @endif
            @if(session('thongbao'))
                <div class="alert alert-success">
                    {{session('thongbao')}}
                </div>
            @endif
            <h3>Thêm mới slide</h3>
            <div class="form-group">
                <label for="exampleInputEmail1">Ten slide</label>
                <input type="text" class="form-control" name="Ten" value="" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Hinh anh</label>
                <input type="file" name="Hinh" class="form-control">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Link</label>
                <input type="text" class="form-control" name="Link" value="" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
