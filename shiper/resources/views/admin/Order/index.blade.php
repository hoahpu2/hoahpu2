@extends('admin.Dashboard.Dashboard')
@section('contents')
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
						<thead>
							<tr role="row">
								<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" width="5px" aria-label="Rendering engine: activate to sort column ascending">STT</th>
								<th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column descending" aria-sort="ascending">Ngay</th>
								<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Ma Don</th>
								<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Ten Hang</th>
								<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Nguoi Nhan</th>
								<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">SDT nguoi nhan</th>
								<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Trang Thai</th>
								<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Deposit(VND)</th>
								<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Tuy Chinh</th>
							</tr>
						</thead>
						<tbody><?php $stt = 0; ?>

							<tr role="row" class="odd"><?php $stt++ ?>
								<td>io</td>
								<td class="">io</td>
								<td class="">io</td>
								<td class="">io</td>
								<td class="">io</td>
								<td>io</td>
								<td>io</td>
								<td>io</td>
								<td width="170px">

								</td>
							</tr>

						</tbody>
					</table>
				</div>
				
				<!-- /.box-header -->
				<div class="box-body">
					<div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
						<div class="row">
							<div class="col-sm-6"></div>
							<div class="col-sm-6"></div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
									<thead>
										<tr role="row">
											<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" width="5px" aria-label="Rendering engine: activate to sort column ascending">STT</th>
											<th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column descending" aria-sort="ascending">Ngay</th>
											<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Ma Don</th>
											<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Ten Hang</th>
											<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Nguoi Nhan</th>
											<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">SDT nguoi nhan</th>
											<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Trang Thai</th>
											<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Deposit(VND)</th>
											<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Tuy Chinh</th>
										</tr>
									</thead>
									<tbody><?php $stt = 0; ?>
										@foreach($order as $value)
										<tr role="row" class="odd"><?php $stt++ ?>
											<td>{!! $stt !!}</td>
											<td class="">{!! $value->updated_at !!}</td>
											<td class="">{!! $value->tracking_code !!}</td>
											<td class="">{!! $value->package_name !!}</td>
											<td class="">{!! $value->recipient_name !!}</td>
											<td>{!! $value->phone !!}</td>
											<td>{!! $value->status !!}</td>
											<td>{!! $value->deposit !!}</td>
											<td width="170px"><a onclick="return xacnhanxoa('Bạn có chắc chắn muốn xóa?');" class="btn btn-primary btn-xs" href="" role = "button">
												<span class="glyphicon glyphicon-search"></span> Xem
											</a>
											<a class="btn btn-success btn-xs" href="{!! route('order.edit',$value->id) !!}" role = "button"><span class="glyphicon glyphicon-edit"></span> Sửa</a>
											{!! Form::open(array('route'=>array('order.destroy',$value->id),'method'=>'DELETE')) !!}
											<button onclick="return xacnhanxoa('Bạn có chắc chắn muốn xóa?');" class="btn btn-danger btn-xs" type="submit">
												<span class="glyphicon glyphicon-trash"></span> Xóa
											</button>
											{!! Form::close() !!}
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-5">
							<div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
						</div>
						<div class="col-sm-7">
							<div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
								<ul class="pagination">
									<li class="paginate_button previous disabled" id="example2_previous"><a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0">Previous</a></li>
									<li class="paginate_button active"><a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0">1</a></li>
									<li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0">2</a></li>
									<li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="3" tabindex="0">3</a></li>
									<li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="4" tabindex="0">4</a></li>
									<li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="5" tabindex="0">5</a></li>
									<li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="6" tabindex="0">6</a></li>
									<li class="paginate_button next" id="example2_next"><a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0">Next</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /.box-body -->
		</div>
		<!-- /.box -->

		<!-- /.box -->
	</div>
	<!-- /.col -->
</div>
<!-- /.row -->
</section>
@endsection