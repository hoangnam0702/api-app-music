@extends('master')
@section('title','Thêm bài hát')	
@section('main')		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Bài hát</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">Thêm bài hát</div>
					<div class="panel-body">
						@include('note')
						<form method="post" enctype="multipart/form-data">
							<div class="row" style="margin-bottom:40px">
								<div class="col-xs-8">
									<div class="form-group" >
										<label>Tên bài hát</label>
										<input required type="text" name="baihat" class="form-control">
									</div>
									<div class="form-group" >
										<label>Tên ca sĩ</label>
										<input required type="text" name="casi" class="form-control">
									</div>
									<div class="form-group" >
										<label>Ảnh sản phẩm</label>
										<input required id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)">
					                    <img id="avatar" class="thumbnail" width="300px" src="img/new_seo-10-512.png">
									</div>
									<div class="form-group" >
										<label>Link bài hát</label>
										<input required type="file" name="link" class="form-control">
									</div>
									<div class="form-group" >
										<label>Lượt thích</label>
										<input required type="text" name="like" class="form-control">
									</div>
									<div class="form-group" >
										<label>Album</label>
										<select required name="album" class="form-control">

											
											@foreach($albumlist as $album)
											<option value="{{$album->IdAlbum}}">{{$album->TenAlbum}}</option>
											@endforeach
											
					                    </select>
									</div>
									<div class="form-group" >
										<label>Playlist</label>
										<select required name="playlist" class="form-control">

											
											@foreach($playlist as $play)
											<option value="{{$play->IdPlayList}}">{{$play->Ten}}</option>
											@endforeach
											
					                    </select>
									</div>
									<div class="form-group" >
										<label>Thể loại</label>
										<select required name="theloai" class="form-control">

											
											@foreach($theloailist as $theloai)
											<option value="{{$theloai->IdTheLoai}}">{{$theloai->TenTheLoai}}</option>
											@endforeach
											
					                    </select>
									</div>
									
									<input type="submit" name="submit" value="Thêm" class="btn btn-primary">
									<a href="#" class="btn btn-danger">Hủy bỏ</a>
								</div>
							</div>
							{{csrf_field()}}
						</form>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
@endsection