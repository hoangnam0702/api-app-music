<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chude extends Model
{
	public $timestamps = FALSE;
    protected $table = "chude";
    protected $primaryKey = 'IdChuDe';
    public function theloai(){
    	return $this->hasMany('App\Theloai','IdChuDe','IdChuDe');
    }
}
