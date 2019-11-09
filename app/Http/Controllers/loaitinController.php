<?php

namespace App\Http\Controllers;

use App\loaitin;
use Illuminate\Http\Request;
use App\theloai;
class loaitinController extends Controller
{
    //
    public function getList(){
        $loaitin = loaitin::all();
        return view('admin.loaitin.list',['loaitin'=>$loaitin]);
    }
    public function getThem(){
        $theloai = theloai::all();
        return view('admin.loaitin.them',['theloai'=>$theloai]);
    }
    public function postThem(Request $request){
        $this ->validate($request,[
            'Ten' => 'required|min:3|max:16',
            'Theloai'=>'required'
        ],[
            'Ten.required' =>'ban chua nhap ten loai tin',
            'Ten.unique' =>'ban da nhap trung ten',
            'Ten.min'=>'do dai toi da tu 3 den 16 ki tu',
            'Ten.max'=>'do dai toi da tu 3 den 16 ki tu',
            'Theloai'=>'ban chua chon the loai'
        ]);

        $loaitin = new loaitin;
        $loaitin -> Ten = $request -> Ten;
        $loaitin -> idTheLoai = $request -> Theloai;
        $loaitin  ->save();
        return redirect('admin/loaitin/them')->with('thongbao','Them moi thanh cong');
    }
    public function getSua($id){
        $theloai = theloai::all();
        $loaitin = loaitin::find($id);
        return view('admin.loaitin.sua',['loaitin'=>$loaitin,'theloai'=>$theloai]);
    }
    public function postSua(Request $request,$id){
        $loaitin = loaitin::find($id);
        $this ->validate($request,[
            'Ten' => 'required|unique:theloai,Ten|min:3|max:16',
            'Theloai' =>'required'
        ],[
            'Ten.required' => 'Ban chua nhap ten',
            'Ten.unique' => 'Ten bi lap lai',
            'Ten.min' =>'Ten phai tu 3 den 16 ki tu',
            'Ten.max' => 'Ten phai tu 3 den 16 ki tu',
            'Theloai.required' =>'Bna phai chon'
        ]);
        $loaitin -> Ten = $request -> Ten;
        $loaitin -> idTheLoai = $request -> Theloai;
        $loaitin ->save();
        return redirect('admin/loaitin/sua/'.$id)->with('thongbao','Sua thanh cong');

    }

    public function getXoa($id){
        $loaitin = loaitin::find($id);
        $loaitin ->delete();


        return redirect('admin/loaitin/list')->with('thongbao','Xoa thanh cong');
    }
}
