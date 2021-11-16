<?php

namespace App\Http\Controllers;
use App\Baihat;
use App\Playlist;
use App\Album;
use App\Theloai;
use App\Http\Requests\AddBaihatRequest;
use Illuminate\Http\Request;


class BaihatController extends Controller
{
    
    public function getBaihat(){
    	$data['baihatlist'] = Baihat::all();
    	return view('baihat',$data);

    }
    public function getAddBaihat(){
        $data['albumlist'] = Album::all();
        $data['playlist'] = Playlist::all();
        $data['theloailist'] = Theloai::all();
        return view('addbaihat',$data);    
    }

    public function postAddBaihat(AddBaihatRequest $request){
        $filename = $request->img->getClientOriginalName();
        $filenames = $request->link->getClientOriginalName();
        $baihat = new Baihat();
        $baihat->TenBaiHat = $request->baihat;
        $baihat->CaSi = $request->casi;
        $baihat->IdAlbum = $request->album;
        $baihat->LuotThich = $request->like;
        $baihat->IdPlayList = $request->playlist;
        $baihat->IdTheLoai = $request->theloai;
        $baihat->HinhBaiHat = $filename;
        $baihat->LinkBaiHat = $filenames;
        $baihat->save();
        $request->img->storeAs('baihat',$filename);
        $request->link->storeAs('mp3',$filenames);
        return back();
    
    }
      
      public function getEditBaiHat($id){
        $data['baihat'] = Baihat::find($id);
        $data['albumlist'] = Album::all();
        $data['playlist'] = Playlist::all();
        $data['theloailist'] = Theloai::all();
        return view('editbaihat',$data);
        
    }
    public function postEditBaiHat(Request $request,$id){
        $baihat = new Baihat();
        $arr['TenBaiHat'] = $request->baihat;
        $arr['CaSi'] = $request->casi;
        $arr['IdAlbum'] = $request->album;
        $arr['LuotThich'] = $request->like;
        $arr['IdPlayList'] = $request->playlist;
        $arr['IdTheLoai'] = $request->theloai;
        if ($request->hasFile('img')) {
            $img = $request->img->getClientOriginalName();
            $arr['HinhBaiHat'] = $img;
            $request->img->storeAs('baihat',$img); 
        }

        if ($request->hasFile('link')) {
            $link = $request->link->getClientOriginalName();
            $arr['LinkBaiHat'] = $link;
            $request->link->storeAs('mp3',$link); 
        }
        
        $baihat::where('IdBaiHat',$id)->update($arr);
        return redirect('baihat');
         
        
        
    }
    public function getDeleteBaiHat($id){
        Baihat::destroy($id);
        return back();

    }


}
