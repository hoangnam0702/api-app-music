<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AddChudeRequest;
use App\Chude;

class ChudeController extends Controller
{
    //
    public function getChude(){
    	$data['chudelist'] = Chude::all();
    	return view('chude',$data);

    }
    public function postChude(AddChudeRequest $request){
    	$filename = $request->img->getClientOriginalName();
     	$chude = new Chude();
     	$chude->TenChuDe = $request->chude;
     	$chude->HinhChuDe = $filename;
     	$chude->save();
     	$request->img->storeAs('chude',$filename);
    	return back();
    	
    }

      public function getEditChude($id){
         $data['chude'] = Chude::find($id);
        return view('editchude',$data);
        
    }
    public function postEditChude(Request $request,$id){
        $album = new Chude;
        $arr['TenChuDe'] = $request->chude;
        if ($request->hasFile('img')) {
            $img = $request->img->getClientOriginalName();
            $arr['HinhChuDe'] = $img;
            $request->img->storeAs('chude',$img); 
        }
        $album::where('IdChuDe',$id)->update($arr);
        return redirect('chude');
         
        
        
    }
    public function getDeleteChude($id){
        Chude::destroy($id);
        return back();

    }
}
