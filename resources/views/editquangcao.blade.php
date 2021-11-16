@extends('master')
@section('title','Sửa Quảng cáo')	
@section('main')
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Danh mục Quảng cáo</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-5 col-lg-5">
					<div class="panel panel-primary">
						<div class="panel-heading">
							Sửa Quảng cáo
						</div>
						<div class="panel-body">
							@include('note')
							<form method="post" enctype="multipart/form-data">
							<div class="row" style="margin-bottom:40px">
								<div class="col-xs-8">
									
									<div class="form-group" >
										<label>Hình ảnh</label>
										<input required id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)">
					                    <img id="avatar" class="thumbnail" width="300px" src="{{asset('../storage/app/quangcao/'.$quangcao->HinhAnh)}}">
									</div>
									<div class="form-group" >
										<label>Nội dung</label>
										<input required type="text" name="noidung" class="form-control" value="{{$quangcao->NoiDung}}">
									</div>
									<div class="form-group" >
										<label>Bài hát</label>

									<select required name="baihat" class="form-control">

											@foreach($baihat as $bai)
											<option value="{{$bai->IdBaiHat}}">{{$bai->TenBaiHat}}</option>
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