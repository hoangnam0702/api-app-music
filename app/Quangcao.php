<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quangcao extends Model
{
	public $timestamps = FALSE;
    protected $table = "quangcao";
    protected $primaryKey = 'Id';
    public function baihat(){
    	return $this->hasMany('App\Baihat','IdBaiHat','IdBaiHat');
    }
}
