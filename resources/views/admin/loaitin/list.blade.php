@extends('admin.layout.index')
@section('content')
{{--    <div class="container-fluid">--}}
{{--        <table class="table table-striped">--}}
{{--            <thead>--}}
{{--            <tr>--}}
{{--                <th scope="col">ID</th>--}}
{{--                <th scope="col">Ten the loai</th>--}}
{{--                <th scope="col">Loai tin</th>--}}
{{--            </tr>--}}
{{--            </thead>--}}
{{--            <tbody>--}}
{{--            @foreach($loaitin as $lt)--}}
{{--                <tr>--}}
{{--                    <td>{{$lt -> id}}</td>--}}
{{--                    <td>{{$lt -> theloai ->Ten}}</td>--}}
{{--                    <td>{{$lt ->Ten}}</td>--}}
{{--                     <td><a href="admin/loaitin/sua/{{$lt -> id}}">Sua</a> | <a onclick="return confirm('Ban co muon xoa ko');" href="admin/loaitin/xoa/{{$lt -> id}}">Xoa</a></td>--}}
{{--                </tr>--}}
{{--                @endforeach--}}


{{--            </tbody>--}}
{{--        </table>--}}
{{--    </div>--}}
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Quản lý loại tin</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Tên thể lọai</th>
                         <th scope="col">Lọai tin</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tfoot>

                    </tfoot>
                    <tbody>
                    @foreach($loaitin as $lt)
                     <tr>
                          <td>{{$lt -> id}}</td>
                           <td>{{$lt -> theloai ->Ten}}</td>
                           <td>{{$lt ->Ten}}</td>
                           <td><a href="admin/loaitin/sua/{{$lt -> id}}">Sửa</a> | <a onclick="return confirm('Bạn có muốn xóa không');" href="admin/loaitin/xoa/{{$lt -> id}}">Xóa</a></td>
                            </tr>
                     @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
