<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table = "album";
    protected $primaryKey = 'IdAlbum';
public $timestamps = FALSE;
    public function baihat(){
    	return $this->hasMany('App\Baihat','IdAlbum','IdAlbum');
    }

}
