<?php

namespace App\Http\Controllers;

use App\sanpham;
use Illuminate\Http\Request;
use  App\slide;

class slideController extends Controller
{
    //
    public function getList(){
        $slide = slide::all();
        return view('admin.slide.list',['slide'=>$slide]);
    }
    public function getThem(){
        $slide = slide::all();
        return view('admin.slide.them',['slide'=>$slide]);
    }
    public function postThem(Request $request){
        $this -> validate($request,[
            'Ten'=>'required',
            'Link'=>'required'
        ],[
            'Ten.required'=>'Ban phai nhap ten',
            'Link.required'=>'Ban phai nhap link'
        ]);

        $slide = new slide;
        $slide -> Ten = $request -> Ten;
        $slide -> link =$request -> Link;

        if ($request->hasFile('Hinh')){
            // Lấy tên file
            $file_name = $request->file('Hinh')->getClientOriginalName();
            $name_image=current(explode('.',$file_name));
            $new_image=$name_image.'_'.rand(0,99).'.'.$request->file('Hinh')->getClientOriginalExtension();
            // Lưu file vào thư mục upload với tên là biến $filename
            $request->file('Hinh')->move('upload/slide/',$new_image);
            $slide -> Hinh = $new_image;
        }
        else{
            $slide -> Hinh ="";
        }
        $slide -> save();
        return redirect('admin/slide/them')->with('thongbao','Them thanh cong');
    }
    public function getXoa($id){
        $slide = slide::find($id);
        $slide ->delete();

        return redirect('admin/slide/list')->with('thongbao','Xoa thanh cong');
    }
}
