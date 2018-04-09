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
				<form role="form" action="{!! route('order.store') !!}" enctype="multipart/form-data" method="POST" accept-charset="utf-8">
					<input type="hidden" name="_token" value="{!! csrf_token() !!}">
					<div class="box-body">
						<div class="form-group">
							<label for="exampleInputEmail1">Ma don (*)</label> 
							<input type="text" name="madon" class="form-control" placeholder="Ma don">
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Ten goi hang (*)</label> 
							<input type="text" name="tengoihang" class="form-control" placeholder="Ten goi hang">
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Deposit (*)</label> 
							<input type="text" name="deposit" class="form-control" placeholder="Deposit">
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">COD (*)</label> 
							<input type="text" name="cod" class="form-control" placeholder="COD">
						</div>
						<div class="form-group">
							<label for="exampleInputFile">File input</label>
							<input type="file" name="file" id="exampleInputFile">
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
								<input type="text" name="sdt" class="form-control" placeholder="So dien thoai">
							</div>
						</div>
						<div class="form-group">
							<label  class="col-sm-4 control-label">Ho ten (*)</label>

							<div class="col-sm-8">
								<input type="text" name="hoten" class="form-control" placeholder="Ho ten">
							</div>
						</div>
						<div class="form-group">
							<label  class="col-sm-4 control-label">Dia chi (*)</label>

							<div class="col-sm-8">
								<input type="text" name="diachi" class="form-control" placeholder="Dia chi">
							</div>
						</div>
					</div>
					<!-- /.box-body -->
					<div class="box-footer">
						<!-- <button type="submit" class="btn btn-default">Cancel</button> -->
						<button type="submit" class="btn btn-info pull-right">Sign in</button>
					</div>
					<!-- /.box-footer -->
				</form>
			</div>
			<!-- /.box -->
			<!-- general form elements disabled -->

		</div>
		<!-- /.box -->
	</div>
</section>
@endsection