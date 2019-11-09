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
                                <th scope="col">Thể lọai</th>
                                <th scope="col">Lọai tin</th>
                                <th scope="col">Tiêu đề</th>
                                <th scope="col">Hình</th>
                                <th scope="col">Tóm tắt</th>
                                <th scope="col">Nội dung</th>
                                <th scope="col">Lượt xem</th>
                                <th scope="col">Gía bán</th>
                                <th scope="col">Màu sắc</th>
                                <th scope="col">Số lượng</th>
                                <th scope="col">Giống</th>
                                <th scope="col">Độ cồn</th>
                                <th scope="col">Dung tích</th>
                                <th scope="col">Thẻ tags</th>
                                <th scope="col">Nổi bật</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tfoot>

                            </tfoot>
                            <tbody>
                            @foreach($tintuc as $tt)
                                <tr>
                                    <td>{{$tt -> id}}</td>
                                    <td>{{$tt -> loaitin-> theloai ->Ten}}</td>
                                    <td>{{$tt -> loaitin -> Ten}}</td>
                                    <td>{{$tt -> tieude}}</td>
                                    <td>
                                        <img src="upload/sanpham/{{$tt->hinh}}" width="100px">
                                    </td>
                                    <td>{{$tt -> tomtat}}</td>
                                    <td>{!! $tt -> noidung !!}</td>
                                    <td>{{$tt -> soluotxem}}</td>
                                    <td>{{$tt -> giadexuat}}</td>
                                    <td>{{$tt -> mausac}}</td>
                                    <td>{{$tt -> soluong}}</td>
                                    <td>{{$tt -> giong}}</td>
                                    <td>{{$tt -> docon}}</td>
                                    <td>{{$tt -> dungtich}}</td>
                                    <td>{{$tt -> tags}}</td>
                                    <td>
                                        @if($tt -> noibat == 2)
                                            <button type="button" class="btn btn-danger">Nổi bật</button>
                                            @else
                                            <button type="button" class="btn btn-primary">Không</button>
                                        @endif
                                    </td>

                                    <td><a href="admin/tintuc/sua/{{$tt -> id}}">Sửa</a> | <a onclick="return confirm('Bạn có muốn xóa không');" href="admin/tintuc/xoa/{{$tt -> id}}">Xóa</a></td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
{{--        <table class="table table-striped">--}}
{{--            <thead>--}}
{{--            <tr>--}}
{{--                <th scope="col">ID</th>--}}
{{--                <th scope="col">The loai</th>--}}
{{--                <th scope="col">Loai tin</th>--}}
{{--                <th scope="col">Tieu de</th>--}}
{{--                <th scope="col">Tom tat</th>--}}
{{--                <th scope="col">Noi dung</th>--}}
{{--                <th scope="col">View</th>--}}
{{--            </tr>--}}
{{--            </thead>--}}
{{--            <tbody>--}}
{{--            @foreach($tintuc as $tt)--}}
{{--                <tr>--}}
{{--                    <td>{{$tt -> id}}</td>--}}
{{--                    <td>{{$tt -> loaitin-> theloai ->Ten}}</td>--}}
{{--                    <td>{{$tt -> loaitin -> Ten}}</td>--}}
{{--                    <td><p>{{$tt -> TieuDe}}</p>--}}
{{--                        <img src="upload/{{$tt->Hinh}}" width="100px">--}}
{{--                    </td>--}}
{{--                    <td>{{$tt -> TomTat}}</td>--}}
{{--                    <td>{{$tt -> NoiDung}}</td>--}}
{{--                    <td>{{$tt -> SoLuotXem}}</td>--}}
{{--                    <td><a href="admin/tintuc/sua/{{$tt -> id}}">Sua</a> | <a onclick="return confirm('Ban co muon xoa ko');" href="admin/tintuc/xoa/{{$tt -> id}}">Xoa</a></td>--}}
{{--                </tr>--}}
{{--            @endforeach--}}

{{--            </tbody>--}}
{{--        </table>--}}


@endsection
