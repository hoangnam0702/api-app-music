<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

	Route::group(['prefix'=>''],function(){
    	 Route::get('','HomeController@getHome');

    	});
	Route::group(['prefix'=>'album'],function(){
    	 Route::get('/','AlbumController@getAlbum');

         Route::post('/','AlbumController@postAlbum');

    	 Route::get('edit/{id}','AlbumController@getEditAlbum');

         Route::post('edit/{id}','AlbumController@postEditAlbum');

         Route::get('delete/{id}','AlbumController@getDeleteAlbum');


    	});
	Route::group(['prefix'=>'theloai'],function(){
    	 Route::get('/','TheloaiController@getTheloai');

    	 Route::get('add','TheloaiController@getAddTheloai');

         Route::post('add','TheloaiController@postAddTheloai');

         Route::get('edit/{id}','TheloaiController@getEditTheloai');

         Route::post('edit/{id}','TheloaiController@postEditTheloai');

         Route::get('delete/{id}','TheloaiController@getDeleteTheloai');

    	});
	Route::group(['prefix'=>'chude'],function(){
    	 Route::get('/','ChudeController@getChude');

         Route::post('/','ChudeController@postChude');
    	 
         Route::get('edit/{id}','ChudeController@getEditChude');

         Route::post('edit/{id}','ChudeController@postEditChude');

         Route::get('delete/{id}','ChudeController@getDeleteChude');

    	});
	Route::group(['prefix'=>'playlist'],function(){
    	 Route::get('/','PlaylistController@getPlaylist');

         Route::post('/','PlaylistController@postPlaylist');

    	 Route::get('edit/{id}','PlaylistController@getEditPlaylist');

         Route::post('edit/{id}','PlaylistController@postEditPlaylist');

         Route::get('delete/{id}','PlaylistController@getDeletePlaylist');

    	});
    Route::group(['prefix'=>'quangcao'],function(){
         Route::get('/','QuangcaoController@getQuangcao');

         Route::post('/','QuangcaoController@postQuangcao');

         Route::get('edit/{id}','QuangcaoController@getEditQuangcao');

         Route::post('edit/{id}','QuangcaoController@postEditQuangcao');

         Route::get('delete/{id}','QuangcaoController@getDeleteQuangcao');

        });
    Route::group(['prefix'=>'baihat'],function(){
         Route::get('/','BaihatController@getBaihat');

         Route::get('add','BaihatController@getAddBaihat');

         Route::post('add','BaihatController@postAddBaihat');

        

         Route::get('edit/{id}','BaihatController@getEditBaihat');

         Route::post('edit/{id}','BaihatController@postEditBaihat');

         Route::get('delete/{id}','BaihatController@getDeleteBaihat');

        });
