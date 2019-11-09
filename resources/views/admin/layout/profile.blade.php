@extends('admin.layout.index')
@section('content')
<div class="container-fluid">
    <form action="admin/profile/{{Auth::user()->id}}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        <h3>Quản lý hồ sơ cá nhân</h3>
        <div class="form-group">
            <label for="exampleInputEmail1">Họ và tên</label>
            <input type="text" class="form-control" name="Ten" value="{{Auth::user()->name}}" placeholder="">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" name="Email" value="{{Auth::user()->email}}" placeholder="">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Mật khẩu</label>
            <input type="password" class="form-control" name="password" value="{{Auth::user()->password}}" placeholder="">
        </div>
    </form>
</div>
@endsection
