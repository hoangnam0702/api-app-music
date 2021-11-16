<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quangcao;
use App\Baihat;
use App\Http\Requests\AddQuangcaoRequest;

class QuangcaoController extends Controller
{
   
     public function getQuangcao(){
    	$data['quangcao'] = Quangcao::all();
    	$data['baihat'] = Baihat::all();
    	return view('quangcao',$data);

    }
    public function postQuangcao(AddQuangcaoRequest $request){
    	$filename = $request->img->getClientOriginalName();
     	$quangcao = new Quangcao();
     	$quangcao->NoiDung = $request->noidung;
     	$quangcao->IdBaiHat = $request->baihat;
     	$quangcao->HinhAnh = $filename;
     	$quangcao->save();
     	$request->img->storeAs('quangcao',$filename);
    	return back();
    	
    }

       public function getEditQuangcao($id){
        $data['quangcao'] = Quangcao::find($id);
        $data['baihat'] = Baihat::all();
        return view('editquangcao',$data);
        
    }
    public function postEditQuangcao(Request $request,$id){
        $quangcao = new Quangcao();
        $arr['NoiDung'] = $request->noidung;
        $arr['IdBaiHat'] = $request->baihat;
        if ($request->hasFile('img')) {
            $img = $request->img->getClientOriginalName();
            $arr['HinhAnh'] = $img;
            $request->img->storeAs('quangcao',$img); 
        }
        $quangcao::where('Id',$id)->update($arr);
        return redirect('quangcao');
         
        
        
    }
    public function getDeleteQuangcao($id){
        Quangcao::destroy($id);
        return back();

    }
    	
}
