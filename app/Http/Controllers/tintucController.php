<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tintuc;
use App\theloai;
use App\loaitin;

class tintucController extends Controller
{
    //
    public function getList(){
        $tintuc = tintuc::orderBy('id','DESC')->get();
        return view('admin.tintuc.list',['tintuc'=>$tintuc]);
    }
    public function getThem(){
        $theloai = theloai::all();
        $loaitin = loaitin::all();
        $tintuc = tintuc::all();
        return view('admin.tintuc.them',['theloai'=>$theloai,'loaitin'=>$loaitin,'tintuc'=>$tintuc]);
    }
    public function postThem(Request $request){
        $this ->validate($request,[
            'Tieude'=>'required',
            'Tomtat'=>'required'

        ],[
            'Tieude.required'=>'Ban chua nhap tieu de',
            'Tomtat.required'=>'Ban chua nhap tom tat'
        ]);

        $tintuc = new tintuc;
        $tintuc -> idtheloai = $request -> Theloai;
        $tintuc -> idLoaiTin = $request -> Loaitin;
        $tintuc -> tieude = $request -> Tieude;
        $tintuc -> tomtat = $request -> Tomtat;
        $tintuc -> noidung = $request -> Noidung;
        $tintuc -> giadexuat = $request -> GiaDeXuat;
        $tintuc -> gia_km = $request -> Giakm;
        $tintuc -> soLuong = $request -> SoLuong;
        $tintuc -> mausac = $request -> MauSac;
        $tintuc -> giong = $request -> Giong;
        $tintuc -> docon = $request -> DoCon;
        $tintuc -> dungtich = $request -> DungTich;
        $tintuc -> tags = $request -> Tags;
        $tintuc -> noibat = $request -> noibat;
        $tintuc -> luotxem = 0;

//        if($request -> hasFile('Hinh')){
//            $file = $request ->file('Hinh');
//            $duoi = $file ->getClientOriginalExtension();
//            if($duoi != 'jpg' && $duoi !='png' && $duoi !='jpeg'){
//                return redirect('admin/tintuc/them')->with('thongbao','chi dc chon anh jpg,png,jpeg');
//            }
//            $name = $file ->getClientOriginalName();
//            $file ->move('upload/tintuc').$name;
//            $tintuc -> Hinh = $name;
//
//        }
//        else{
//            $tintuc -> Hinh ="";
//        }

        if ($request->hasFile('Hinh')){
            // Lấy tên file
            $file_name = $request->file('Hinh')->getClientOriginalName();
            $name_image=current(explode('.',$file_name));
            $new_image=$name_image.'_'.rand(0,99).'.'.$request->file('Hinh')->getClientOriginalExtension();
            // Lưu file vào thư mục upload với tên là biến $filename
            $request->file('Hinh')->move('upload/sanpham/',$new_image);
            $tintuc -> hinh = $new_image;
        }
        else{
            $tintuc -> hinh ="";
        }
        $tintuc ->save();
        return redirect('admin/tintuc/them')->with('thongbao','Them thanh cong');
    }
    public function getSua($id){
        $theloai = theloai::all();
        $loaitin = loaitin::all();
        $tintuc = tintuc::find($id);
        return view('admin.tintuc.sua',['tintuc'=>$tintuc,'loaitin'=>$loaitin,'theloai'=>$theloai]);
    }
    public function postSua(Request $request,$id){
        $tintuc = tintuc::find($id);
        $this -> validate($request,[
            'Tieude'=>'required',
            'Tomtat'=>'required'
        ],[
            'Tieude.required'=>'Ban chua nhap tieu de',
            'Tomtat.required'=>'Ban chua nhap tom tat'
        ]);

        $tintuc -> idtheloai = $request -> Theloai;
        $tintuc -> idLoaiTin = $request -> Loaitin;
        $tintuc -> tieude = $request -> Tieude;
        $tintuc -> tomtat = $request -> Tomtat;
        $tintuc -> noidung = $request -> Noidung;
        $tintuc -> giadexuat = $request -> GiaDeXuat;
        $tintuc -> gia_km = $request -> Giakm;
        $tintuc -> soLuong = $request -> SoLuong;
        $tintuc -> mausac = $request -> MauSac;
        $tintuc -> giong = $request -> Giong;
        $tintuc -> docon = $request -> DoCon;
        $tintuc -> dungtich = $request -> DungTich;
        $tintuc -> tags = $request -> Tags;
        $tintuc -> noibat = $request -> noibat;
        $tintuc -> luotxem = 0;

        if($request -> hasFile('Hinh')){
            $file_name=$request ->file('Hinh')->getClientOriginalName();
            $name_image=current(explode('.',$file_name));
            $new_image=$name_image.'_'.rand(0,99).'.'.$request->file('Hinh')->getClientOriginalExtension();
            $request ->file('Hinh')->move('upload/sanpham/',$new_image);
            unlink('upload/sanpham/'.$tintuc -> Hinh);
            $tintuc -> Hinh =$new_image;
        }
        $tintuc ->save();
        return redirect('admin/tintuc/sua/'.$id)->with('thongbao','Sua thanh cong');

    }
    public function getXoa($id){
        $tintuc = tintuc::find($id);
        $tintuc ->delete();

        return redirect('admin/tintuc/list')->with('thongbao','Xoa thanh cong');
    }
}
