<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\users;
use App\Rules\Captcha;

class userController extends Controller
{
    //
    public function getList(){
        $user = users::all();
        return view('admin.user.list',['user'=>$user]);
    }
    public function getThem(){
        return view('admin.user.them');
    }
    public function postThem(Request $request){
        $this ->validate($request,[
            'Ten'=>'required',
            'Email'=>'required',
            'Password'=>'required',
            'PasswordAgain'=>'required|same:Password'
        ],[
            'Ten.required'=>'Ban chua nhap ten',
            'Email.required'=>'Ban chua nhap email',
            'Password.required'=>'Ban chua nhap pass',
            'PasswordAgain.required'=>'Ban chua nhap lai pass',
            'PasswordAgain.same'=>'Mat khau ko giong nhau'
        ]);

        $user = new users;
        $user -> name = $request -> Ten;
        $user -> email = $request -> Email;
        $user -> quyen = $request -> quyen;
        $user -> password = bcrypt($request -> Password);
        $user -> save();
        return redirect('admin/user/them')->with('thongbao','Them thanh cong');
    }

    public function getSua($id){
        $user = users::find($id);
        return view('admin.user.sua',['user'=>$user]);
    }
    public function postSua(Request $request,$id){
        $this ->validate($request,[
            'Ten'=>'required',
            'Email'=>'required',
            'Password'=>'required',

        ],[
            'Ten.required'=>'Ban chua nhap ten',
            'Email.required'=>'Ban chua nhap email',
            'Password.required'=>'Ban chua nhap pass',

        ]);
        $user = users::find($id);
        $user -> name = $request -> Ten;
        $user -> email = $request -> Email;
        $user -> quyen = $request -> quyen;
        $user -> password = bcrypt($request -> Password);
        $user -> save();

        return redirect('admin/user/sua/'.$id)->with('thongbao','Sua thanh cong');

    }
    public function getDangnhap(){
        return view('admin.login.login');
    }
    public function postDangnhap(Request $request){
        $this ->validate($request,[
            'email'=>'required',
            'password'=>'required'
        ],[
            'email.required'=>'Ban phai nhap email',
            'password.required'=>'Ban chua nhap password'
        ]);

        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
            return redirect('admin/theloai/list');
        }
        else{
            return redirect('admin/dangnhap')->with('thongbao','Dang nhap ko thanh cong');
        }
    }
    public function getDangki(){
        $user = users::all();
        return view('admin.login.register',['user'=>$user]);
    }
    public function postDangki(Request $request){
        $this -> validate($request,[
            'text'=>'required',
            'email'=>'required|email|unique:users,email',
            'password'=>'required',
            'reset'=>'required|same:password',
            'g-recaptcha-response'=> new Captcha(),

        ],[
            'text.required'=>'Ban phai nhap ten',
            'email.required'=>'Ban phai nhap email',
            'email.email'=>'Dinh dang email ko dung',
            'email.unique'=>'email da ton tai',
            'password.required'=>'Ban chua nhap password',
            'reset.required'=>'Ban phai nhap lai pass',
            'reset.same'=>'mat khau ko trung khop',



        ]);
        $user = new users;
        $user -> name = $request -> text;
        $user -> email = $request -> email;
        $user -> password = bcrypt($request -> Password);
        $user -> save();
        return redirect('admin/dangnhap')->with('thongbao','Dang ki thanh cong');
    }
    public function getProfile(){
        $user = users::all();
        return view('admin.layout.profile',['user'=>$user]);
    }
    public function getDangxuat()
    {
        Auth::logout();
        return redirect('admin/dangnhap');
    }
}
