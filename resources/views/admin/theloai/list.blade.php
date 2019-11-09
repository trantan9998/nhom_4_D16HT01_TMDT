@extends('admin.layout.index')
@section('content')

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Quản lý thể loại</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Tên the loai</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tfoot>

                    </tfoot>
                    <tbody>
                    @foreach($theloai as $tl)
                    <tr>
                    <td>{{$tl -> id}}</td>
                    <td>{{$tl -> Ten}}</td>
                    <td><a href="admin/theloai/sua/{{$tl -> id}}">Sửa</a> | <a onclick="return confirm('Ban co muon xoa ko');" href="admin/theloai/xoa/{{$tl -> id}}">Xóa</a></td>
                    </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
