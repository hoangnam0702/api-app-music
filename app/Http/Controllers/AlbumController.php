<?php

namespace App\Http\Controllers;

use App\Album;
use App\albums;
use App\Http\Requests\AddAlbumRequest;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    //
   public function getAlbum(){
    	$data['albumlist'] = Album::all();
    	return view('album',$data);

    }
    public function postAlbum(AddAlbumRequest $request){
    	$filename = $request->img->getClientOriginalName();
     	$album = new Album();
     	$album->TenAlbum = $request->namealbum;
     	$album->TenCaSiAlbum = $request->namecasi;
     	$album->HinhAlbum = $filename;
     	$album->save();
     	$request->img->storeAs('album',$filename);
    	return back();
    	
    }

     public function getEditAlbum($id){
     	 $data['album'] = Album::find($id);
     	return view('editalbum',$data);
    	
    }
    public function postEditAlbum(Request $request,$id){
        $album = new Album;
        $arr['TenAlbum'] = $request->namealbum;
        $arr['TenCaSiAlbum'] = $request->namecasi;
        if ($request->hasFile('img')) {
            $img = $request->img->getClientOriginalName();
            $arr['HinhAlbum'] = $img;
            $request->img->storeAs('album',$img); 
        }
        $album::where('IdAlbum',$id)->update($arr);
        return redirect('album');
         
        
        
    }
    public function getDeleteAlbum($id){
    	Album::destroy($id);
    	return back();

    } 

}
