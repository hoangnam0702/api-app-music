<?php

namespace App\Http\Controllers;
use App\Baihat;
use App\Playlist;
use App\Album;
use App\Theloai;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function getHome(){
    	$data['baihat']= Baihat::all();
    	$data['album']= Album::all();
    	$data['playlist']= Playlist::all();
    	return view('index',$data);	
    }
}
