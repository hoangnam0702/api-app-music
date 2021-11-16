@extends('master')
@section('title','Danh mục Playlist')	
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
							Thêm Playlist
						</div>
						<div class="panel-body">
							@include('note')
							<form method="post" enctype="multipart/form-data">
							<div class="row" style="margin-bottom:40px">
								<div class="col-xs-8">
									<div class="form-group" >
										<label>Tên Playlist</label>
										<input required type="text" name="playlist" class="form-control">
									</div>
									<div class="form-group" >
										<label>Hình nền</label>
										<input required id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)">
					                    <img id="avatar" class="thumbnail" width="300px" src="img/new_seo-10-512.png">
									</div>
									<div class="form-group" >
										<label>Tên icon</label>
										<input required type="text" name="icon" class="form-control">
									</div>
									
									<input type="submit" name="submit" value="Thêm" class="btn btn-primary">
									
								</div>
							</div>
							{{csrf_field()}}
						</form>
						</div>
					</div>
			</div>
			<div class="col-xs-12 col-md-7 col-lg-7">
				<div class="panel panel-primary">
					<div class="panel-heading">Danh sách Playlist</div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<table class="table table-bordered">
				              	<thead>                 
					                <tr class="bg-primary">
					                  <th>Tên Playlist</th>
					                  <th style="width:30%">Tùy chọn</th>
					                </tr>
				              	</thead>
				              	<tbody>
				              		@foreach($playlist as $play)
								<tr>
									<td><a >{{$play->Ten}}</a></td>
									<td>
			                    		<a href="{{asset('playlist/edit/'.$play->IdPlayList)}}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Sửa</a>
			                    		<a href="{{asset('playlist/delete/'.$play->IdPlayList)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
			                  		</td>
			                  	</tr>
			                  	@endforeach
				                </tbody>
				            </table>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
@endsection