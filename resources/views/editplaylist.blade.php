@extends('master')
@section('title','Sửa Playlist')	
@section('main')
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Danh mục Playlist</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-5 col-lg-5">
					<div class="panel panel-primary">
						<div class="panel-heading">
							Sửa Playlist
						</div>
						<div class="panel-body">
							@include('note')
							<form method="post" enctype="multipart/form-data">
							<div class="row" style="margin-bottom:40px">
								<div class="col-xs-8">
									<div class="form-group" >
										<label>Tên Playlist</label>
										<input required type="text" name="playlist" class="form-control" value="{{$playlist->Ten}}">
									</div>
									<div class="form-group" >
										<label>Hình nền</label>
										<input required id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)">
					                    <img id="avatar" class="thumbnail" width="300px" src="{{asset('../storage/app/playlist/'.$playlist->Hinhnen)}}">
									</div>
									<div class="form-group" >
										<label>Tên icon</label>
										<input required type="text" name="icon" class="form-control" value="{{$playlist->Hinhicon}}">
									</div>
									
									<input type="submit" name="submit" value="Cập nhật" class="btn btn-primary">
									
								</div>
							</div>
							{{csrf_field()}}
						</form>
						</div>
					</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
@endsection