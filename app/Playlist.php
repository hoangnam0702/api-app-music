<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
	public $timestamps = FALSE;
    protected $table = "playlist";
    protected $primaryKey = 'IdPlayList';
    public function baihat(){
    	return $this->hasMany('App\Baihat','IdPlayList','IdPlayList');
    }
}
