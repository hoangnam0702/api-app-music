@extends('master')
@section('title','Sửa thể loại')	
@section('main')
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Danh mục thể loại</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-5 col-lg-5">
					<div class="panel panel-primary">
						<div class="panel-heading">
							Sửa thể loại
						</div>
						<div class="panel-body">
							@include('note')
							<form method="post" enctype="multipart/form-data">
							<div class="row" style="margin-bottom:40px">
								<div class="col-xs-8">
									
									<div class="form-group" >
										<div class="form-group" >
										<label>Tên thể loai</label>
										<input required type="text" name="theloai" class="form-control" value="{{$theloai->TenTheLoai}}">
									</div>
										<label>Hình ảnh</label>
										<input required id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)">
					                    <img id="avatar" class="thumbnail" width="300px" src="{{asset('../storage/app/theloai/'.$theloai->HinhTheLoai)}}">
									</div>
									<div class="form-group" >
										<label>Chủ đề</label>

									<select required name="chude" class="form-control">

											@foreach($chudelist as $chude)
											<option value="{{$chude->IdChuDe}}">{{$chude->TenChuDe}}</option>
											@endforeach
					                    </select>
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