<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Baihat extends Model
{
    protected $table = "baihat";
    protected $primaryKey = 'IdBaiHat';
    
    public $timestamps = FALSE;
    public function album(){
    	return $this->belongsTo('App\Album','IdAlbum','IdAlbum');
    }
     public function playlist(){
    	return $this->belongsTo('App\Playlist','IdPlaylist','IdPlaylist');
    }
    public function theloai(){
    	return $this->belongsTo('App\Theloai','IdTheLoai','IdTheLoai');
    }
    public function quangcao(){
    	return $this->hasMany('App\Quangcao','IdBaiHat','IdBaiHat');
    }

}
