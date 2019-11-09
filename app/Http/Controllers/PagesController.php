<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\theloai;
use App\loaitin;
use App\slide;
use App\tintuc;
use App\users;
use App\tbl_new;
use App\comment;
use Cart;

use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    //
    public function __construct()
    {
        $theloai = theloai::all();
        $loaitin = loaitin::all();
        $slide = slide::all();
        $user = users::all();
        $tbl_new=tbl_new::all();
        view()->share('tbl_new',$tbl_new);
        view()->share('user',$user);
        view()->share('slide',$slide);
        view()->share('theloai',$theloai);
    }
    public function trangchu(){
//        $sanphamnoibat= DB::table('loaitin')->join('sanpham','sanpham.idLoaiTin','=','loaitin.id')->select('loaitin.*,sanpham.*')->where('noibat','=',2)->take(8)->get();
        $tintuc = tintuc::all()->take(12);
        $sanphamnoibat=DB::table('sanpham')->where('noibat','=',2)->take(8)->get();
        return view('page.trangchu',['tintuc'=>$tintuc,'sanphamnoibat'=>$sanphamnoibat]);
    }
    public function chitietsanpham($id){
        $chitietsanpham = tintuc::find($id);
        $sanphamcungloai = DB::table('sanpham')->where([['idLoaiTin','=',$chitietsanpham -> idLoaiTin],['id','!=',$id]])->get();
        $sanphamlienquan = DB::table('sanpham')->where('id','!=',$id)->take(4)->get();
        return view('page.chitietsanpham',['chitietsanpham'=>$chitietsanpham,'sanphamlienquan'=>$sanphamlienquan,'sanphamcungloai'=>$sanphamcungloai]);
    }
    public function loaisanpham($id){
        $loaisanpham = loaitin::find($id);
        $sanpham =DB::table('sanpham')->where('idLoaiTin','=',$id)->get();
        return view('page.loaisanpham',['loaisanpham'=>$loaisanpham,'sanpham'=>$sanpham]);
    }
    public function theloaisanpham($id){
        $theloaisanpham = theloai::find($id);
        $sanpham =DB::table('sanpham')->where('idtheloai','=',$id)->get();
        return view('page.theloaisanpham',['theloaisanpham'=>$theloaisanpham,'sanpham'=>$sanpham]);
    }
    public function tbl_new(){
        return view('page.tintuc');

    }
    public function chitiettintuc($id){
        $chitiettintuc = tbl_new::find($id);
        $view = DB::table('tbl_new')->where('id', '=',$id)->increment('view', 1);
        $tinlienquan = DB::table('tbl_new')->where('id','!=',$id)->take(3)->get();
        $comment = DB::table('comment')->where('idTinTuc','=',$id)->get();
        return view('page.chitiettintuc',['chitiettintuc'=>$chitiettintuc,'tinlienquan'=>$tinlienquan,'comment'=>$comment]);
    }
    public function postchitiettintuc(Request $request,$id){
        $comment = new comment;
        $comment ->idTinTuc = $id;
        $comment -> NoiDung = $request -> binhluan;
        $comment -> save();
        return back();
    }
    public function lienhe(){
        return view('layouts.lienhe.index');
    }
    public function giohang($id){
        $giohang = tintuc::find($id);
        return view('page.cart',['giohang'=>$giohang]);
    }

}
