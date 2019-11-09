@extends('admin.layout.index')
@section('content')

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Quản lý thành viên</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Password</th>
                        <th scope="col">Loại</th>
                    </tr>
                    </thead>
                    <tfoot>

                    </tfoot>
                    <tbody>
                    @foreach($user as $us)
                                    <tr>
                                        <td>{{$us -> id}}</td>
                                        <td>{{$us -> name}}</td>
                                        <td style="width: 150px!important;">{{$us -> email}}</td>
                                        <td>{{$us -> password}}</td>
                                        <td>
                                            @if($us -> quyen == 1)
                                                {{"Admin"}}
                                                @else
                                                {{"Thường"}}
                                            @endif
                                        </td>
                                        <td><a href="admin/user/sua/{{$us -> id}}">Sửa</a> | <a onclick="return confirm('Ban co muon xoa ko');" href="admin/user/xoa/{{$us -> id}}">Xóa</a></td>
                                    </tr>
                                @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
