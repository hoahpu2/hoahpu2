
	<aside class="main-sidebar">
		<!-- sidebar: style can be found in sidebar.less -->
		<section class="sidebar">
			<!-- Sidebar user panel -->
			<div class="user-panel">
				<div class="pull-left image">
					<img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
				</div>
				<div class="pull-left info">
					<p>Alexander Pierce</p>
					<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
				</div>
			</div>
			<!-- search form -->
			<form action="#" method="get" class="sidebar-form">
				<div class="input-group">
					<input type="text" name="q" class="form-control" placeholder="Search...">
					<span class="input-group-btn">
						<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
						</button>
					</span>
				</div>
			</form>
			<!-- /.search form -->
			<!-- sidebar menu: : style can be found in sidebar.less -->
			<ul class="sidebar-menu" data-widget="tree">
				<li class="header">MAIN NAVIGATION</li>
				<li class="treeview">
					<a href="#">
						<i class="fa fa-edit"></i> <span>Quan ly don hang</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
					<ul class="treeview-menu">
						<li><a href="{!! route('order.create') !!}"><i class="fa fa-circle-o"></i> Them don hang</a></li>
						<li><a href="{!! route('order.index') !!}"><i class="fa fa-circle-o"></i> Danh sach don hang</a></li>
					</ul>
				</li>
				<li>
					<a href="revenue">
						<i class="fa fa-table"></i> <span>Quan ly doanh thu</span>
					</a>
				</li>
				<li>
					<a href="pages/mailbox/mailbox.html">
						<i class="fa fa-envelope"></i> <span>Thong bao</span>
						<span class="pull-right-container">
							<small class="label pull-right bg-yellow">12</small>
							<small class="label pull-right bg-green">16</small>
							<small class="label pull-right bg-red">5</small>
						</span>
					</a>
				</li>	
				<li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Cai dat</span></a></li>
				<li class="header">LABELS</li>
				<li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
				<li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
				<li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
			</ul>
		</section>
		<!-- /.sidebar -->
	</aside>
