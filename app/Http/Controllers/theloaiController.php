<?php

namespace App\Http\Controllers;
use App\theloai;

use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;

class theloaiController extends Controller
{
    //
    public function getList(){
        $theloai=theloai::all();
        return view('admin.theloai.list',['theloai'=>$theloai]);
    }
    public  function getThem(){
        return view('admin.theloai.them');
    }
    public  function postThem(Request $request){
        $this -> validate($request, [
            'Ten' => 'required|min:3|max:26'
        ],
            [
                'Ten.required' => 'Ban chua nhap ten the loai',
                'Ten.min' => 'Ten the loai phai tu 3 den 16 ki tu',
                'Ten.max' => 'Ten the loai phai tu 3 den 26 ki tu'
            ]
        );
        $theloai = new theloai;
        $theloai -> Ten = $request -> Ten;
        $theloai ->save();

        return redirect('admin/theloai/them')->with('thongbao','Them thanh cong');
    }
    public  function getSua($id){
        $theloai = theloai::find($id);
        return view('admin.theloai.sua',['theloai'=>$theloai]);
    }
    public function postSua(Request $request,$id){
        $theloai = theloai::find($id);
        $this ->validate($request,[
            'Ten' => 'required|unique:theloai,Ten|min:3|max:26'
        ],[
            'Ten.required' => 'Ban chua nhap ten',
            'Ten.unique' => 'Ten bi lap lai',
            'Ten.min' =>'Ten phai tu 3 den 16 ki tu',
            'Ten.max' => 'Ten phai tu 3 den 26 ki tu'
        ]);

        $theloai -> Ten = $request -> Ten;
        $theloai ->save();

        return redirect('admin/theloai/sua/'.$id)->with('thongbao','Sua thanh cong');
    }

    public function getXoa($id){
        $theloai = theloai::find($id);
        $theloai ->delete();

        return redirect('admin/theloai/list');
    }
}
