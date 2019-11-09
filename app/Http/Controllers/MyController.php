<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function xinchao(){
        echo "ok";
        return redirect()->route('myroute');
    }
    public function formpost(Request $request){
        echo $request -> input('Hoten');
    }
    public function upfile(Request $request){
       if($request->hasFile('up')){
           $file=$request->file('up');
           if($file->getClientOriginalExtension('up') == 'jpg' ){
               $filename=$file->getClientOriginalName('up');
               $file->move('img',$filename);
           }
           else{
               echo "chon lai file";
           }

       }
       else{
           echo "chua co file";
       }
    }
}
