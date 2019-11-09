<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use function foo\func;

class tintuc extends Model
{
    //
    protected $table = "sanpham";
    public function loaitin(){
        return $this->belongsTo('App\loaitin','idLoaiTin','id');
    }
    public function comment(){
        return $this->hasMany('App\comment','idTinTuc',id);
    }

}
