@extends('admin.layout.index')
@section('content')
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Quản lý sản phẩm</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Tiêu đề</th>
                            <th scope="col">Hình</th>
                            <th scope="col">Nội dung</th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tfoot>

                        </tfoot>
                        <tbody>
                        @foreach($tbl_new as $tt)
                            <tr>
                                <td>{{$tt -> id}}</td>
                                <td>{{$tt ->tieude}}</td>
                                <td>
                                    <img src="upload/tintuc/{{$tt-> hinh}}" width="100px">
                                </td>
                                <td>{!! $tt -> noidung !!}</td>

                                <td><a href="admin/tbl_new/sua/{{$tt -> id}}">Sửa</a> | <a onclick="return confirm('Bạn có muốn xóa không');" href="admin/tbl_new/xoa/{{$tt -> id}}">Xóa</a></td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
{{--    <div class="container-fluid">--}}
{{--        <table class="table table-striped">--}}
{{--            <thead>--}}
{{--            <tr>--}}
{{--                <th scope="col">ID</th>--}}
{{--                <th scope="col">Tiêu đề</th>--}}
{{--                <th scope="col">Hình</th>--}}
{{--                <th scope="col">Nội dung</th>--}}
{{--                <th scope="col"></th>--}}
{{--            </tr>--}}
{{--            </thead>--}}
{{--            <tbody>--}}
{{--            @foreach($tbl_new as $tt)--}}
{{--                <tr>--}}
{{--                    <td>{{$tt -> id}}</td>--}}
{{--                    <td>{{$tt ->tieude}}</td>--}}
{{--                    <td>--}}
{{--                        <img src="upload/tintuc/{{$tt-> hinh}}" width="100px">--}}
{{--                    </td>--}}
{{--                    <td>{{$tt -> noidung}}</td>--}}

{{--                    <td><a href="admin/tbl_new/sua/{{$tt -> id}}">Sua</a> | <a onclick="return confirm('Ban co muon xoa ko');" href="admin/tbl_new/xoa/{{$tt -> id}}">Xoa</a></td>--}}
{{--                </tr>--}}
{{--            @endforeach--}}

{{--            </tbody>--}}
{{--        </table>--}}
{{--    </div>--}}
@endsection
