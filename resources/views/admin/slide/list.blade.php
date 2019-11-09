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
                            <th scope="col">Tên</th>
                            <th scope="col">Hình</th>
                            <th scope="col">Link</th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tfoot>

                        </tfoot>
                        <tbody>
                        @foreach($slide as $sd)
                            <tr>
                                <td>{{$sd -> id}}</td>
                                <td>{{$sd ->Ten}}</td>
                                <td>
                                    <img src="upload/slide/{{$sd-> Hinh }}" width="100px">
                                </td>
                                <td>{{$sd -> link}}</td>

                                <td><a href="admin/slide/sua/{{$sd -> id}}">Sửa</a> | <a onclick="return confirm('Bạn có muốn xóa không');" href="admin/slide/xoa/{{$sd -> id}}">Xóa</a></td>
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
{{--                <th scope="col">Ten</th>--}}
{{--                <th scope="col">Hinh</th>--}}
{{--                <th scope="col">Link</th>--}}
{{--            </tr>--}}
{{--            </thead>--}}
{{--            <tbody>--}}
{{--            @foreach($slide as $sd)--}}
{{--                <tr>--}}
{{--                    <td>{{$sd -> id}}</td>--}}
{{--                    <td>{{$sd ->Ten}}</td>--}}
{{--                    <td>--}}
{{--                        <img src="upload/slide/{{$sd-> Hinh }}" width="100px">--}}
{{--                    </td>--}}
{{--                    <td>{{$sd -> link}}</td>--}}

{{--                    <td><a href="admin/slide/sua/{{$sd -> id}}">Sua</a> | <a onclick="return confirm('Ban co muon xoa ko');" href="admin/slide/xoa/{{$sd -> id}}">Xoa</a></td>--}}
{{--                </tr>--}}
{{--            @endforeach--}}

{{--            </tbody>--}}
{{--        </table>--}}
{{--    </div>--}}

@endsection
