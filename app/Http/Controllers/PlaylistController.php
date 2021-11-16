<?php

namespace App\Http\Controllers;
use App\Playlist;
use App\Http\Requests\AddPlaylistRequest;
use Illuminate\Http\Request;

class PlaylistController extends Controller
{
    //
    public function getPlaylist(){
    	$data['playlist'] = Playlist::all();
    	return view('playlist',$data);

    }
    public function postPlaylist(AddPlaylistRequest $request){
    	$filename = $request->img->getClientOriginalName();
     	$playlist = new Playlist();
     	$playlist->Ten = $request->playlist;
     	$playlist->Hinhicon = $request->icon;
     	$playlist->HinhNen = $filename;
     	$playlist->save();
     	$request->img->storeAs('playlist',$filename);
    	return back();
    	
    }

       public function getEditPlaylist($id){
         $data['playlist'] = Playlist::find($id);
        return view('editplaylist',$data);
        
    }
    public function postEditPlaylist(Request $request,$id){
        $playlist = new Playlist;
        $arr['Ten'] = $request->playlist;
        $arr['Hinhicon'] = $request->icon;
        if ($request->hasFile('img')) {
            $img = $request->img->getClientOriginalName();
            $arr['HinhNen'] = $img;
            $request->img->storeAs('playlist',$img); 
        }
        $playlist::where('IdPlayList',$id)->update($arr);
        return redirect('playlist');
         
        
        
    }
    public function getDeletePlaylist($id){
        Playlist::destroy($id);
        return back();

    }
}
