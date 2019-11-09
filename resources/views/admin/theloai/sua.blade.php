@extends('admin.layout.index')
@section('content')
    <div class="container-fluid">

        <form name="admin/theloai/sua/{{$theloai -> id}}" method="POST" enctype="multipart/form-data">
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
            <h1>The loai:  <small>{{$theloai -> Ten}}</small></h1>
            <div class="form-group">
                <label for="exampleInputEmail1">Ten</label>
                <input type="text" class="form-control" name="Ten" value="{{$theloai -> Ten}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tiêu đề">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
