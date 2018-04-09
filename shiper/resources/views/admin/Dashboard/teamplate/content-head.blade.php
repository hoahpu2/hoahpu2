
	<section class="content-header">
		<h1>
			{{ isset($dashbroard) ? $dashbroard : '' }}
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> {{ isset($home) ? $home : '' }}</a></li>
			<li class="active">{{ isset($home1) ? $home1 : '' }}</li>
		</ol>
	</section>
