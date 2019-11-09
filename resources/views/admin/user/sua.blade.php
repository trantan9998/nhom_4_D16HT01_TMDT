@extends('admin.layout.index')
@section('content')
    <div class="container-fluid">
        <form name="admin/user/sua/{{$user -> id}}" method="POST" enctype="multipart/form-data">
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
            <h3>Sửa mới user: {{$user -> name}}</h3>
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" name="Ten" value="{{$user -> name}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" name="Email" value="{{$user -> email}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Password đã mã hóa</label>
                <input type="password" class="form-control" name="Password" value="{{$user -> password}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Quyền người dùng: </label>
                <label>Admin<input @if($user -> quyen == 1)
                                   checked=""
                                    @endif
                                    type="checkbox"

                                   name="quyen" value="1"></label>
                <label>Thường<input @if($user -> quyen == 0)
                                    checked=""
                                    @endif
                                    type="checkbox"
                                 name="quyen" value="0"></label>


            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
