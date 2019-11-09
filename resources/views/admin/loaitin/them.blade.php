@extends('admin.layout.index')
@section('content')
    <div class="container-fluid">
        <form name="admin/loaitin/them" method="POST" enctype="multipart/form-data">
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
            <h3>Thêm mới loai tin</h3>
            <div class="form-group">
                <label for="exampleInputEmail1">Ten</label>
                <select class="form-control" name="Theloai">
                    @foreach($theloai as $tl)
                        <option value="{{$tl -> id}}">{{$tl -> Ten}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Ten loai tin</label>
                <input type="text" class="form-control" name="Ten" value="" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tiêu đề">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
