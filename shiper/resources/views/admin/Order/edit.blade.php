@extends('admin.Dashboard.Dashboard')
@section('contents')
<section class="content">
	<div class="row">
		<!-- left column --><!-- id="exampleInputEmail1" -->
		<div class="col-md-6">
			<!-- general form elements -->
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Thong tin goi hang</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				{!! Form::open(array('route'=>array('order.update',$order->id),'method'=>'PUT','enctype'=>'multipart/form-data')) !!}

				<div class="box-body">
					<div class="form-group">
						<label for="exampleInputEmail1">Ma don (*)</label> 
						<input type="text" name="madon" class="form-control" placeholder="Ma don" value="{!! old('madon',isset($order) ? $order['tracking_code'] : null) !!}">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Ten goi hang (*)</label> 
						<input type="text" name="tengoihang" class="form-control" placeholder="Ten goi hang" value="{!! old('tengoihang',isset($order) ? $order['package_name'] : null) !!}">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Deposit (*)</label> 
						<input type="text" name="deposit" class="form-control" placeholder="Deposit" value="{!! old('deposit',isset($order) ? $order['deposit'] : null) !!}">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">COD (*)</label> 
						<input type="text" name="cod" class="form-control" placeholder="COD" value="{!! old('cod',isset($order) ? $order['cod'] : null) !!}">
					</div>
					<div class="form-group">
						<label for="exampleInputFile">File input</label>
						<input type="file" name="file" id="exampleInputFile">
					</div>
					<div class="form-group">
					<label>Trang thai</label>
						<select name="status" class="form-control" style="width: 200px">
							<option value="1">Moi tao</option>
							<option value="2">Dang lay</option>
							<option value="3">Da ve kho</option>
							<option value="4">Dang giao</option>
							<option value="5">Giao thanh cong</option>
							<option value="6">Khong giao thanh cong</option>
							<option value="7">Cho chuyen deposit</option>
							<option value="8">Da chuyen deposit</option>
							<option value="9">Huy</option>
						</select>
					</div>
				</div>
				
			</div>
			
		</div>
		<!--/.col (left) -->
		<!-- right column -->
		<div class="col-md-6">
			<!-- Horizontal Form -->
			<div class="box box-info form-horizontal">
				<div class="box-header with-border">
					<h3 class="box-title">Thong tin nguoi nhan</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				
				<div class="box-body">
					<div class="form-group">
						<label  class="col-sm-4 control-label">So dien thoai (*)</label>

						<div class="col-sm-8">
							<input type="text" name="sdt" class="form-control" placeholder="So dien thoai" value="{!! old('sdt',isset($order) ? $order['phone'] : null) !!}">
						</div>
					</div>
					<div class="form-group">
						<label  class="col-sm-4 control-label">Ho ten (*)</label>

						<div class="col-sm-8">
							<input type="text" name="hoten" class="form-control" placeholder="Ho ten" value="{!! old('hoten',isset($order) ? $order['recipient_name'] : null) !!}">
						</div>
					</div>
					<div class="form-group">
						<label  class="col-sm-4 control-label">Dia chi (*)</label>

						<div class="col-sm-8">
							<input type="text" name="diachi" class="form-control" placeholder="Dia chi" value="{!! old('diachi',isset($order) ? $order['address'] : null) !!}">
						</div>
					</div>
				</div>
				<!-- /.box-body -->
				<div class="box-footer">
					<!-- <button type="submit" class="btn btn-default">Cancel</button> -->
					<button type="submit" class="btn btn-info pull-right">Sign in</button>
				</div>
				<!-- /.box-footer -->
				{!! Form::close() !!}
			</div>
			<!-- /.box -->
			<!-- general form elements disabled -->

		</div>
		<!-- /.box -->
	</div>
</section>
@endsection