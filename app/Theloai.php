<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Theloai extends Model
{
		public $timestamps = FALSE;
   protected $table = "theloai";
   protected $primaryKey = 'IdTheLoai';
   public function chude(){
    	return $this->belongsTo('App\Chude','IdChuDe','IdChuDe');
    }
    public function baihat(){
    	return $this->hasMany('App\Baihat','IdTheLoai','IdTheLoai');
    	//lìn day nè
    }
}
