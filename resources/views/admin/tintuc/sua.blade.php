@extends('admin.layout.index')
@section('content')
    <div class="container-fluid">
        <form action="admin/tintuc/sua/{{$tintuc -> id}}" method="POST" enctype="multipart/form-data">
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
            <h3>Sua tin tuc: {{$tintuc -> TieuDe}}</h3>
            <div class="form-group">
                <label for="exampleInputEmail1">Ten the loai</label>
                <select class="form-control" name="Theloai" id="Theloai">
                    @foreach($theloai as $tl)
                        <option
                            @if($tintuc -> loaitin -> theloai -> id == $tl -> id)
                                {{"selected"}}
                                @endif
                            value="{{$tl -> id}}">{{$tl -> Ten}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Ten loai tin</label>
                <select class="form-control" name="Loaitin" id="Loaitin">
                    @foreach($loaitin as $lt)
                        <option
                            @if($tintuc -> loaitin -> id == $lt -> id)
                                {{"selected"}}
                                @endif
                            value="{{$lt -> id}}">{{$lt -> Ten}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Tieu de</label>
                <input type="text" class="form-control" name="Tieude" value="{{$tintuc -> tieude}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Tom tat</label>
                <input type="text" class="form-control" name="Tomtat" value="{{$tintuc -> tomtat}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Noi dung</label>
                <textarea class="ckeditor" required name="Noidung">{{$tintuc -> noidung}}</textarea>
                <script type="text/javascript">
                    var editor = CKEDITOR.replace('Noidung',{
                        language:'vi',
                        filebrowserImageBrowseUrl: '../../public/admin_asset/ckfinder/ckfinder.html?Type=Images',
                        filebrowserFlashBrowseUrl: '../../public/admin_asset/ckfinder/ckfinder.html?Type=Flash',
                        filebrowserImageUploadUrl: '../../public/admin_asset/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                        filebrowserFlashUploadUrl: '../../public/admin_asset/public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
                    });
                </script>

            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Hinh anh</label>
                <p><img src="upload/sanpham/{{$tintuc -> hinh}}" width="150px"></p>
                <input type="file" name="Hinh" class="form-control">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Gia ban</label>
                <input type="text" class="form-control" name="GiaDeXuat" value="{{$tintuc -> giadexuat}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Gia khuyen mai</label>
                <input type="text" class="form-control" name="Giakm" value="{{$tintuc -> gia_km}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Mau Sac</label>
                <input type="text" class="form-control" name="MauSac" value="{{$tintuc -> mausac}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">So Luong</label>
                <input type="text" class="form-control" name="SoLuong" value="{{$tintuc -> soluong}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Giong</label>
                <input type="text" class="form-control" name="Giong" value="{{$tintuc ->giong}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Do Con</label>
                <input type="text" class="form-control" name="DoCon" value="{{$tintuc ->docon}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Dung Tich</label>
                <input type="text" class="form-control" name="DungTich" value="{{$tintuc -> dungtich}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">The Tags</label>
                <input type="text" class="form-control" name="Tags" value="{{$tintuc -> tags}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Tin noi bat: </label>
                <label>Co<input type="checkbox" name="noibat" value="2"></label>
                <label>Khong<input type="checkbox" name="noibat" value="0"></label>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function () {
            $("#Theloai").change(function () {
                var idTheLoai =$(this).val();
                $.get("admin/ajax/loaitin/"+idTheLoai,function (data) {
                    $("#Loaitin").html(data);
                });
            });
        });
    </script>
@endsection
