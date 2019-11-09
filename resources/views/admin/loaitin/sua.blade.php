@extends('admin.layout.index')
@section('content')
    <div class="container-fluid">
        <form name="admin/loaitin/sua/{{$loaitin -> id}}" method="POST">
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
            <h1>Loai tin:  <small>{{$loaitin -> Ten}}</small></h1>
            <div class="form-group">
                <label for="exampleInputEmail1">Ten the loai</label>
                <select class="form-control" name="Theloai">
                    @foreach($theloai as $tl)
                    <option
                        @if($loaitin -> idTheLoai == $tl -> id)
                            {{"selected"}}
                            @endif
                        value="{{$tl -> id}}">{{$tl -> Ten}}</option>
                        @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Ten loai tin</label>
                <input type="text" class="form-control" name="Ten" value="{{$loaitin -> Ten}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tiêu đề">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
