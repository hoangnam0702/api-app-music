@extends('master')
@section('title','Thêm thể loại')	
@section('main')		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Thể loại</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">Thêm thể loại</div>
					<div class="panel-body">
						@include('note')
						<form method="post" enctype="multipart/form-data">
							<div class="row" style="margin-bottom:40px">
								<div class="col-xs-8">
									<div class="form-group" >
										<label>Tên thể loại</label>
										<input required type="text" name="theloai" class="form-control">
									</div>
									<div class="form-group" >
										<label>Ảnh thể loại</label>
										<input required id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)">
					                    <img id="avatar" class="thumbnail" width="300px" src="img/new_seo-10-512.png">
									</div>
									<div class="form-group" >
										<label>Chủ đề</label>
										<select required name="chude" class="form-control">

											
											@foreach($chudelist as $chude)
											<option value="{{$chude->IdChuDe}}">{{$chude->TenChuDe}}</option>
											@endforeach
											
					                    </select>
									</div>
									
									
									<input type="submit" name="submit" value="Thêm" class="btn btn-primary">
									<a href="{{asset('theloai')}}" class="btn btn-danger">Hủy bỏ</a>
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