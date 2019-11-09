@extends('admin.layout.index')
@section('content')
    <div class="container-fluid">
        <form action="admin/tbl_new/them" method="POST" enctype="multipart/form-data">
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
            <h3>Thêm mới tin tuc</h3>
            <div class="form-group">
                <label for="exampleInputEmail1">Tieu de</label>
                <input type="text" class="form-control" name="tieude" value="" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Hinh anh</label>
                <input type="file" name="hinh" class="form-control">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Noi dung</label>
                <textarea class="ckeditor" required name="noidung"></textarea>
                <script type="text/javascript">
                    var editor = CKEDITOR.replace('noidung',{
                        language:'vi',
                        filebrowserImageBrowseUrl: '../../admin_asset/ckfinder/ckfinder.html?Type=Images',
                        filebrowserFlashBrowseUrl: '../../admin_asset/ckfinder/ckfinder.html?Type=Flash',
                        filebrowserImageUploadUrl: '../../admin_asset/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                        filebrowserFlashUploadUrl: '../../admin_asset/public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
                    });
                </script>

            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
