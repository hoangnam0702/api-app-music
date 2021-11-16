<?php

namespace App\Http\Controllers;
use App\Baihat;
use App\Playlist;
use App\Album;
use App\Theloai;
use App\Chude;
use App\Http\Requests\AddTheloaiRequest;
use Illuminate\Http\Request;

class TheloaiController extends Controller
{
    //
    public function getTheloai(){
    	$data['theloailist'] = Theloai::all();
    	return view('theloai',$data);

    }
    public function getAddTheloai(){
    	$data['chudelist'] = Chude::all();
    	return view('addtheloai',$data);
    }

    public function postAddTheloai(AddTheloaiRequest $request){
    	$filename = $request->img->getClientOriginalName();
     	$theloai = new Theloai();
     	$theloai->TenTheLoai = $request->theloai;
     	$theloai->IdChuDe = $request->chude;
     	$theloai->HinhTheLoai = $filename;
     	$theloai->save();
     	$request->img->storeAs('theloai',$filename);
    	return back();
    	
    }

      public function getEditTheloai($id){
         $data['theloai'] = Theloai::find($id);
         $data['chudelist'] = Chude::all();
        return view('edittheloai',$data);
        
    }
    public function postEditTheloai(Request $request,$id){
        $theloai = new Theloai();
        $arr['TenTheLoai'] = $request->theloai;
        $arr['IdChuDe'] = $request->chude;
        if ($request->hasFile('img')) {
            $img = $request->img->getClientOriginalName();
            $arr['HinhTheLoai'] = $img;
            $request->img->storeAs('theloai',$img); 
        }
        $theloai::where('IdTheLoai',$id)->update($arr);
        return redirect('theloai');
         
        
        
    }
    public function getDeleteTheloai($id){
        Theloai::destroy($id);
        return back();

    }
}
