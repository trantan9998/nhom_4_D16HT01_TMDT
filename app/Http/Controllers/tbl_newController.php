<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tbl_new;

class tbl_newController extends Controller
{
    //
    public function getList(){
        $tbl_new = tbl_new::all();
        return view('admin.tbl_new.list',['tbl_new'=>$tbl_new]);
    }
    public function getThem(){
        return view('admin.tbl_new.them');
    }
    public function postThem(Request $request){
        $this -> validate($request,[
            'tieude'=>'required',
            'hinh'=>'required',
            'noidung'=>'required'
        ],[
            'tieude.required'=>'Ban chua nhap tieu de',
            'hinh.required'=>'Ban chua chon hinh',
            'noidung.required'=>'ban chua nhap noi dung'
        ]);

        $tbl_new = new tbl_new;
        $tbl_new -> tieude = $request -> tieude;
        $tbl_new -> noidung = $request -> noidung;
        if ($request->hasFile('hinh')){
            // Lấy tên file
            $file_name = $request->file('hinh')->getClientOriginalName();
            $name_image=current(explode('.',$file_name));
            $new_image=$name_image.'_'.rand(0,99).'.'.$request->file('hinh')->getClientOriginalExtension();
            // Lưu file vào thư mục upload với tên là biến $filename
            $request->file('hinh')->move('upload/tintuc/',$new_image);
            $tbl_new -> hinh = $new_image;
        }
        else{
            $tbl_new -> hinh ="";
        }
        $tbl_new ->save();
        return redirect('admin/tbl_new/them')->with('thongbao','ban da them thanh cong');
    }
    public function getSua($id){
        $tbl_new = tbl_new::find($id);
        return view('admin.tbl_new.sua',['tbl_new'=>$tbl_new]);
    }
    public function postSua(Request $request,$id){
        $tbl_new = tbl_new::find($id);
     $this -> validate($request,[

     ],[

     ]);
        $tbl_new -> tieude = $request -> tieude;
        $tbl_new -> noidung = $request -> noidung;
        if ($request->hasFile('hinh')){
            // Lấy tên file
            $file_name = $request->file('hinh')->getClientOriginalName();
            $name_image=current(explode('.',$file_name));
            $new_image=$name_image.'_'.rand(0,99).'.'.$request->file('hinh')->getClientOriginalExtension();
            // Lưu file vào thư mục upload với tên là biến $filename
            $request->file('hinh')->move('upload/tintuc/',$new_image);
            $tbl_new -> hinh = $new_image;
        }
        $tbl_new -> save();
        return redirect('admin/tbl_new/sua/'.$id)->with('thongbao','ban da sua thanh cong');
    }
    public function getXoa($id){
        $tbl_new = tbl_new::find($id);
        $tbl_new -> delete();
        return redirect('admin/tbl_new/list')->with('thongbao','xoa thanh cong');

    }

}
